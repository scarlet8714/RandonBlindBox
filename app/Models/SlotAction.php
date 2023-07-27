<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SlotAction extends Model
{
    use HasFactory;
    private $remain;
    private $probability, $hide;
    private $prize;
    private $getPrize;
    private $box, $pid;

    // 取得商品資訊
    function getProduct($mybox, $mypid) {
        // $products = DB::select('select * from product where pid = ?', [$mypid]);
        $remains = DB::select('select box_remain_blind(?, ?) as remain', [$mybox, $mypid]);
        // 取得商品的抽獎機率以及中盒數量，排序修改後保證一般款的機率在上方
        $lottery = DB::select('select DISTINCT probability, box_count from product_status as ps left join product as p on ps.pid = p.pid where ps.pid = ? and ps.box_id = ? order by ps.probability DESC', [$mypid, $mybox]); 
        $presents = DB::select('select blind_id from product_status where box_id = ? and pid = ? and sold = 0', [$mybox, $mypid]);
        $this->box = $mybox;
        $this->pid = $mypid;

        // 將該中盒的剩餘品項放入prize
        foreach($presents as $present) {
            $this->prize[] = $present->blind_id;
        }

        // 存入一般款式以及隱藏款式的機率，以及該中盒剩餘數量
        $this->remain = $remains[0]->remain;
        $this->boxCount = $lottery[0]->box_count;
        $this->probability = $lottery[0]->probability;

        // 如果為空，則表示該中盒沒有隱藏款
        if (isset($lottery[1]))
        $this->hide = $lottery[1]->probability;
    }

    // 計算總機率
    function countProbability() {
        return ($this->remain * $this->probability + $this->hide);
    }

    // 抽獎
    function slot() {
        if($this->remain === 0) {
            return '此中盒已空';
        }
        else {
            $slot = rand(0, (int)($this->countProbability() * 100));
            $temp = floor($slot / $this->probability / 100);
            $this->getPrize = array_splice($this->prize, $temp, 1);
            $this->prizeDelete($this->box, $this->pid, $this->getPrize[0]);
            return json_encode($this->givePrize());
        }
    }

    // 轉換代號成為款式
    function givePrize() {
        $result = DB::select('select name, photo from product_photo where pid = ? and blind_id = ?', [$this->pid, $this->getPrize[0]]);
        $result = $result[0]->name;
        return $result;
    }

    // 扣除該中盒款式數量
    function prizeDelete($mybox, $mypid, $myblind){ 
        DB::update('update product_status set sold = ? where box_id = ? and pid = ? and blind_id =?', [1, $mybox, $mypid, $myblind]);
    }
}

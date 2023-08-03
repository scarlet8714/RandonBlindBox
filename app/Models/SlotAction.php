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
    function getProduct($pid) {
        $productImg = DB::select('SELECT showbar,open,box_count FROM `blind_photo` as bp left join `product` as p on bp.pid = p.pid where bp.pid  = ?', [$pid]);
        $productBox = DB::select('SELECT * FROM `product_status` where pid = ? order by box_id ASC', [$pid]);
        $productTypeImg = DB::select('SELECT * FROM `product_photo` where pid = ?', [$pid]);

        $result[0] = (json_decode(json_encode($productImg), 1))[0];
        $result[1] = json_decode(json_encode($productBox), 1);
        $result[2] = json_decode(json_encode($productTypeImg), 1);

        // 加入最大盲盒編號
        $result[0]['max_box'] = $this->maxBox($result[1]);

        return $result;
    }

    // 取得商品彈幕
    function getBullet($pid) {
        $result = DB::select('select from lottery_details');
    }

    // 取得最大盲盒編號
    function maxBox($boxArray) {
        // var_dump($boxArray);
        foreach($boxArray as $type) {
            $temp = 0;
            if ( $temp < $type['box_id'] ) {
                $temp = $type['box_id'];
            }
        }
        return $temp;
    }

    // 取得會員抽取次數
    function getMemberTimes($mid, $pid) {
        $times = DB::select('select times from lottery where mid = ? and pid = ?', [$mid, $pid]);
        $times = json_decode(json_encode($times), 1);
        return $times;
    }

    
    // 抽獎，傳入訂單參數
    function slot($oid) {
        if($this->remain === 0) {
            return json_encode('此中盒已空');
        }
        else if (0) {

        }
        else {
            // 隨機數值
            $slot = rand(0, (int)($this->countProbability() * 100));

            if ($slot > (($this->countProbability() - $this->hide) * 100) || $this->countProbability() === $this->hide) {
                // echo $this->countProbability() - $this->hide;
                $this->getPrize[0] = 'hide';
            }
            else {
                $temp = floor($slot / $this->probability / 100);
                $this->getPrize = array_splice($this->prize, $temp, 1);
            }
            // 扣除該獎項
            $this->prizeDelete($this->box, $this->pid, $this->getPrize[0]);
            // 紀錄該獎項
            $this->prizeRecord($oid);
            // var_dump($this->givePrize());
            $remainTimes = $this->checkTimes(1, 6);
            // var_dump($remainTimes);

            return json_decode(json_encode($this->givePrize()), 1);
        }
    }

    // 取得中盒商品資訊
    function getBoxProduct($box, $pid) {
        // $products = DB::select('select * from product where pid = ?', [$pid]);
        // 找出該中盒剩餘可抽數量
        $remains = DB::select('select box_remain_blind(?, ?) as remain', [$box, $pid]);
        // 取得商品的抽獎機率以及中盒數量，排序修改後保證一般款的機率在上方
        $lottery = DB::select('select DISTINCT probability, box_count from product_status as ps left join product as p on ps.pid = p.pid where ps.pid = ? and ps.box_id = ? order by ps.probability DESC', [$pid, $box]); 
        $presents = DB::select('select blind_id from product_status where box_id = ? and pid = ? and sold = 0', [$box, $pid]);
        $this->box = $box;
        $this->pid = $pid;

        // 將該中盒的剩餘品項放入prize
        foreach($presents as $present) {
            $this->prize[] = $present->blind_id;
        }

        // 將隱藏款移動到陣列最後
        if(isset($this->prize)) {
            if (in_array('hide', $this->prize)) {
                array_splice($this->prize, array_search('hide', $this->prize), 1);
                $this->prize [] = 'hide';
            }
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

    // 轉換代號成為款式
    function givePrize() {
        $results = DB::select('select name, photo_bg from product_photo where pid = ? and blind_id = ?', [$this->pid, $this->getPrize[0]]);
        $prize = [];
        $prize['name'] = $results[0]->name;
        $prize['photo'] = $results[0]->photo_bg;
        // var_dump($prize);
        return $prize;
    }

    // 扣除該中盒款式數量
    function prizeDelete($box, $pid, $blind){ 
        DB::update('update product_status set sold = ? where box_id = ? and pid = ? and blind_id =?', [1, $box, $pid, $blind]);
        DB::update('update product_photo set quantity = quantity - 1 where pid = ? and blind_id =?', [$pid, $blind]);
    }

    // 將品項記錄到抽獎明細
    function prizeRecord($order) {
        DB::insert('insert into lottery_details values (?, ?, ?, ?)', [$order, $this->pid, $this->getPrize[0], $this->box]);
    }

    // 該會員抽獎次數
    function checkTimes($mid, $pid) {
        return DB::select('select times from lottery where pid = ? and mid = ?', [$mid, $pid]);
    }

    // 測試功能用
    function test() {
        // 測試撈熱門商品
        // $results = DB::select('select pid, sum(quantity) as sold from order_details where sid = 3 GROUP by pid order by sold desc limit 10;');
        // $bestSell = [];
        // foreach($results as $result) {
        //     $bestSell[] = $result->pid;
        // }
        // $result = DB::select('select * from product where pid in ('. implode(",", $bestSell) . ')' . 'order by field (pid,' . implode(",", $bestSell) . ')');
         
        // var_dump($result);

        // return view('test');
    }

}

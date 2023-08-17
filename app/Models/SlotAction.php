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
        $productImg = DB::select('SELECT showbar,open,box_count,sold FROM `blind_photo` as bp left join `product` as p on bp.pid = p.pid left join product_status as ps on bp.pid = ps.pid where bp.pid  = ? ORDER BY ps.box_id ASC, ps.blind_id ASC', [$pid]);
        $productBox = DB::select('SELECT * FROM `product_status` where pid = ? order by box_id ASC', [$pid]);
        $productTypeImg = DB::select('SELECT * FROM `product_photo` where pid = ?', [$pid]);
        
        // 修正，彈幕會互相影響
        $pidAllPrize = DB::select('select oid, pid, blind_id from lottery_details where pid = ?', [$pid]);
        
        foreach($pidAllPrize as $bullet) {
            // 取得會員
            $member = DB::select('select name from member where mid = (select mid from orders where oid = ?)', [$bullet->oid])[0];
            // 取得商品
            $prize = DB::select('select name from product_photo where pid = ? and blind_id = ?', [$bullet->pid, $bullet->blind_id])[0];
            $combine['name'] = $member->name;
            $combine['prize'] = $prize->name;
            // dd($combine);
            $result[3][] = $combine;
        }
        
        $whoGot = DB::select('select DISTINCT m.name, pp.name as prize from lottery_details as ld left join product_photo as pp on ld.pid = pp.pid left join orders as o on o.oid = ld.oid left join member as m on o.mid = m.mid where ld.pid = ? and pp.blind_id in (select blind_id from lottery_details where pid = ?);', [$pid, $pid]);

        $result[0] = (json_decode(json_encode($productImg), 1));
        $result[1] = json_decode(json_encode($productBox), 1);
        $result[2] = json_decode(json_encode($productTypeImg), 1);
        // $result[3] = json_decode(json_encode($whoGot), 1);
        // 加入最大盲盒編號
        $result[0]['max_box'] = $this->maxBox($result[1]);

        return $result;
    }

    // 取得最大盲盒編號
    function maxBox($boxArray) {
        foreach($boxArray as $type) {
            $temp = 0;
            if ( $temp < $type['box_id'] ) {
                $temp = $type['box_id'];
            }
        }
        return $temp;
    }

    // 取得訂單編號
    function getOid($token) {
        $oid = DB::select('select oid from orders where mid in (select mid from member where token = ?)', [$token]);
        return $oid;
    }

    // 取得訂單抽獎次數、獎品
    function getOrderResult($oid) {

    }

    // 取得訂單的抽獎商品
    function getOrderPrize($oid) {
        $pidProduct = [];
        // 修正
        $allPrize = DB::select('select pid, blind_id from lottery_details where oid = ?', [$oid]);
        foreach($allPrize as $item) {
            $pidProduct[$item->pid][] = DB::select('select pid, name, photo_bg from product_photo where pid = ? and blind_id = ?', [$item->pid, $item->blind_id]);
        }

        return $pidProduct;
    }

    // 取得會員抽取次數
    function getMemberTimes($mid, $pid) {
        // $times = DB::select('select times from lottery where mid = ? and pid = ?', [$mid, $pid]);
        $times = DB::select('SELECT DISTINCT quantity - (select count(*) as spend from lottery_details as ld left join orders as o on ld.oid = o.oid left join member as m on o.mid=m.mid where pid = ? and m.mid = ?) as times FROM `order_details` as od left join orders as o on od.oid = o.oid left join lottery_details as ld on od.oid = ld.oid where od.pid = ? and mid = ?;', [$pid, $mid, $pid, $mid]);
        $times = json_decode(json_encode($times), 1);
        return $times;
    }

    
    // 抽獎，傳入訂單參數
    function slot($mid, $oid) {
        if($this->remain === 0) {
            return json_encode('此中盒已空');
        }
        else {
            // 扣除會員抽獎次數，目前為預設token，最後須傳入token
            // $this->timesDed();

            // 隨機數值
            $slot = rand(0, (($this->countProbability() * 100)));

            $temp = floor($slot / $this->probability / 100);
            $this->getPrize = array_splice($this->prize, $temp, 1);
            // 扣除該獎項
            $this->prizeDelete($this->box, $this->pid, $this->getPrize[0]);
            // 紀錄該獎項
            $this->prizeRecord($oid);
            $remainTimes = $this->checkTimes($mid, $this->pid);

            $prize = json_decode(json_encode($this->givePrize()), 1);
            $prize['remainTimes'] = $remainTimes[0]->times;

            return $prize;
        }
    }

    // 取得中盒商品資訊
    function getBoxProduct($box, $pid) {
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
        return $prize;
    }

    // 扣除該中盒款式數量
    function prizeDelete($box, $pid, $blind){ 
        DB::update('update product_status set sold = ? where box_id = ? and pid = ? and blind_id =?', [1, $box, $pid, $blind]);
        DB::update('update product_photo set quantity = quantity - 1 where pid = ? and blind_id =?', [$pid, $blind]);
    }

    // 扣除會員抽獎次數
    function timesDed() {
        DB::update('update lottery set times = times - 1 where mid IN (select mid from member where token = ?) and pid = ?', [$_COOKIE['token'], $this->pid]);
    }

    // 將品項記錄到抽獎明細
    function prizeRecord($order) {
        DB::insert('insert into lottery_details values (?, ?, ?, ?)', [$order, $this->pid, $this->getPrize[0], $this->box]);
    }

    // 該會員抽獎次數
    function checkTimes($mid, $pid) {
        // return DB::select('select times from lottery where pid = ? and mid = ?', [$pid, $mid]);
        return DB::select('SELECT DISTINCT quantity - (select count(*) as spend from lottery_details as ld left join orders as o on ld.oid = o.oid left join member as m on o.mid=m.mid where pid = ? and m.mid = ?) as times FROM `order_details` as od left join orders as o on od.oid = o.oid left join lottery_details as ld on od.oid = ld.oid where od.pid = ? and mid = ?;', [$pid, $mid, $pid, $mid]);
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

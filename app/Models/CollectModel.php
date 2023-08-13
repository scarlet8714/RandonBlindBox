<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CollectModel extends Model
{
    use HasFactory;

    function getProduct($token) {
        // 取得所有商品大項目
        $result = DB::select('select head_photo, name, publish, pid, box_count, gate from product');
        // 將每個pid的商品款式撈出
        $product = DB::select('select pp.pid as pid, photo_bg as photo, pp.name as type_name, p.name as product_name, gate from product_photo as pp left join product as p on p.pid = pp.pid where blind_id <> "all" ORDER BY pid ASC');
        $member = DB::select('select name from member where token = ?', [$token]);
        $schedules = DB::select('select pid, count(blind_id) as quantity from (select DISTINCT pid, blind_id from lottery_details where oid in (select oid from orders where mid in (select mid from member where token = ?))) as sch GROUP by pid', [$token]);

        foreach($product as $item) {
            $gateProduct[$item->pid][] = $item;
        }

        // 進度條，將有符合的pid放入數量，若沒有則讓blade為0
        foreach($result as $item) {
            foreach($schedules as $schedule) {
                if ($item->pid == $schedule->pid) {
                    $item->schedule = $schedule->quantity;
                }
            }
        }

        $collect[0] = $result;
        $collect[1] = $gateProduct;
        $collect[2] = $member[0];
        $collect[3] = $schedules;

        return $collect;
    }
    
    function getProductDetails($pid) {
        $product = DB::select('select pp.pid, photo_bg as photo, pp.name as type_name, p.name as product_name, gate from product_photo as pp left join product as p on p.pid = pp.pid where blind_id <> "all" ORDER BY pid ASC');
        $product = json_decode(json_encode($product), 1);
        return $product;
    }
}

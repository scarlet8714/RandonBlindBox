<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CollectModel extends Model
{
    use HasFactory;

    function getProduct() {
        $result = DB::select('select head_photo, name, publish, pid, box_count from product');
        // 紀錄最大中盒數量
        $temp = 0;
        foreach($result as $item) {
            if ($item->box_count > $temp) {
                $temp = $item->box_count;
            }
        }
        $product = DB::select('select * from product_photo where blind_id <> "all"');
        $collect[0] = $result;
        $collect[1] = $product;
        $collect[2] = $temp;
        return $collect;
    }
    
    function getProductDetails($pid) {
        $product = DB::select('select * from product_photo where blind_id <> "all"', [$pid]);
        $product = json_decode(json_encode($product), 1);
        return $product;
    }
}

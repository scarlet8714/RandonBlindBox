<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CollectModel extends Model
{
    use HasFactory;

    function getProduct() {
        $result = DB::select('select head_photo, name, publish from product');
        json_decode(json_encode($result), 1);
        $product = DB::select('select * from product_photo where pid = ? and blind_id <> "all"', [1]);
        var_dump($product);
        return $result;
    }
    
    function getProductDetails($pid) {
        $product = DB::select('select * from product_photo where pid = ? and blind_id <> "all"', [$pid]);
        $product = json_decode(json_encode($product), 1);
        return $product;
    }
}

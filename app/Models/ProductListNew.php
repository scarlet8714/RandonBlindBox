<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ProductListNew extends Model
{
    use HasFactory;
    public function imgpath(){
        $new = DB::select("select * from product left join product_photo on product.pid = product_photo.pid where (TIMEDIFF(now(), onsale_time) < '720:00:00') and sid = 1;");
        return $new;
    }
}

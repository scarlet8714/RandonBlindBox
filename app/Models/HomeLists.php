<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class HomeLists extends Model
{
    use HasFactory;
    public function imgpath() {
        $new = DB::select("select * from product where (TIMEDIFF(now(), onsale_time) < '720:00:00') limit 3;");
        $hot = DB::select("select * from product right JOIN (select pid, sum(quantity) as sold from order_details GROUP by pid order by sold desc limit 3) as list on product.pid = list.pid");
        $series = DB::select("select * from product limit 3");
        $imglist = ['new'=>$new, 'hot'=>$hot, 'series'=>$series];
        return $imglist;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductListHot extends Model
{
    use HasFactory;
    public function imgpath(){
        $temp = DB::select("select pid, sum(quantity) as sold from order_details where sid = 3 GROUP by pid order by sold desc limit 10;");
        $arr = [];
        foreach($temp as $item){
            $arr[] = $item->pid;
        }
        $new = DB::select("select * from product where find_in_set(pid, '6,3,4,5,7') order by field(pid, " . implode(',', $arr) . ");");
        return $new;
    }
}

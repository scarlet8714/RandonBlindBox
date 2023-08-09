<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MyOrderTotal extends Model
{
    use HasFactory;
    public function total($mid, $oid){
        $res = DB::select('select sum(price * quantity) as total from product as p left join order_details as od on p.pid = od.pid left join orders as o on o.oid = od.oid WHERE o.mid = ? and o.oid = ? GROUP by o.oid;', [$mid[0]->mid, $oid]);
        return $res;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MyOrder extends Model
{
    use HasFactory;

    public function orderTable(){
        $orderNumber = DB::select('select * from orders where oid = 1;');
        return $orderNumber;
    }
}



// class Myorder extends Model
// {
//     use HasFactory;
//     public function orderTable() {
//         $orderNumber = DB::select("select * from orders where oid = 1;");
//         $orderAmount =  DB::select("select sum(price * quantity) as total from product as p left join order_details as od on p.pid = od.pid left join orders as o on o.oid = od.oid WHERE o.mid = 1 and o.oid = 1 GROUP by o.oid;;");
//         $orderState =  DB::select("select * from orders where oid = 1");
//         $orderlist = ['orderNumber'=>$orderNumber, 'orderAmount'=>$orderAmount, 'orderState' =>$orderState];
//         return $orderlist;
//     }
// }


// $orderDate =  DB::select("select oid, order_date from orders where date(order_date) = '2023-07-18';");
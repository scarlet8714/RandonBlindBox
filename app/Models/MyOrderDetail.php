<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MyOrderDetail extends Model
{
    use HasFactory;
    public function orderdetail($oid) {
        $orders = DB::select('select * from orders where oid = ?', [$oid]);
        $orderdetails = DB::select('select * from order_details where oid = ?', [$oid]);
        return [$orders, $orderdetails];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\GetPid;
// use App\Models\MyOrderTotal;
use App\Models\MyOrderDetail;

class MyOrderDetailController extends Controller
{
    //
    function __construct(){
        // $this->mid = new GetPid();
        $this->detail = new MyOrderDetail();
    }
    public function action($oid){
        // $membertoken = $request->cookie('token');
        // $mid = $this->mid->respid($membertoken);
        $res = $this->detail->orderdetail($oid);
        // dd($res);
        return view('membercenterpage.orderdetail');
    }
}

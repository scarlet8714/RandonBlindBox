<?php

// MyorderController.php 控制器
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyOrder;
use App\Models\GetPid;
use App\Models\MyOrderTotal;

class MyorderController extends Controller
{
    //
    function __construct() {
        $this->orderNum = new Myorder();
        $this->mid = new GetPid();
        $this->ordertotal = new MyOrderTotal();
    }

    public function action(Request $request){
        $membertoken = $request->cookie('token');
        $mid = $this->mid->respid($membertoken);
        $order = $this->orderNum->orderTable($mid);
        $total = [];
        foreach($order as $item){
            $total[$item->oid] = $this->ordertotal->total($mid, $item->oid);
        }
        return view('membercenterpage.myorder', ['orderNum' => $order, 'total' => $total]);
    }
}



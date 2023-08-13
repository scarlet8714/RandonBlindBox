<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetPid;
use App\Models\OrderSubmit;

class OrderController extends Controller
{
    function __construct(){
        $this->mid = new GetPid();
        $this->order = new OrderSubmit();
    }
    //
    public function order(Request $request){
        $membertoken = $request->cookie('token');
        $mid = $this->mid->respid($membertoken);
        $oid = (string)rand(1, 9) + substr((string)(rand(0, 99999999) / 100000000), 2, -1);
        $result = $this->order->ordersubmit($oid, $mid[0]->mid, $request->rname, $request->rphone, $request->pm, 1, $request->dm);
        return $result;
        // return $request->rname;
    }

}
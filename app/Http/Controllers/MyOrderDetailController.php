<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetPid;
use App\Models\MyOrderTotal;

class MyOrderDetailController extends Controller
{
    //
    function __construct(){
        $this->mid = new GetPid();
        $this->total = new MyOrderTotal();
    }
    public function total($oid){
        $membertoken = $request->cookie('token');
        $mid = $this->mid->respid($membertoken);
        $res = $this->total->total($mid, $oid);
    }
}

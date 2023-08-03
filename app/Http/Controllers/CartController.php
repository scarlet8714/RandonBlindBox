<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetPid;
use App\Models\AddCartModel;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    function __construct() {
        $this->getpid = new GetPid();
        $this->addcart = new AddCartModel();
    }
    public function addcart(Request $request){
        $token = $request->cookie('token');
        $mid = $this->getpid->respid($token);
        $this->addcart->addcart($mid[0]->mid, $request->pid, $request->sid, $request->quantity);
        return $request;
    }
    public function add(Request $request){
        $token = $request->cookie('token');
        $mid = $this->getpid->respid($token);
        $res = $this->addcart->addcart($mid[0]->mid, (int)$request->pid, $request->sid, (int)$request->quantity);
        die($request);
        // var_dump($mid[0]->mid);
        return;
    }
}

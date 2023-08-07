<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetCartItem;
use App\Models\GetPid;
use App\Models\DeleteCartItem;

class CartItemController extends Controller
{
    function __construct(){
        $this->cart = new GetCartItem();
        $this->mid = new GetPid();
        $this->delete = new DeleteCartItem();
    }
    //
    public function action(Request $request) {
        $membertoken = $request->cookie('token');
        if($membertoken) {
            $mid = $this->mid->respid($membertoken);
            $res = $this->cart->getcartitem($mid[0]->mid);
            return $res;
        } else {
            return false;
        }
    }
    public function deleteitem($cid, Request $request) {
        $membertoken = $request->cookie('token');
        $mid = $this->mid->respid($membertoken);
        $this->delete->dci($cid);
        return;
    }
}

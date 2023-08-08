<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartProduct;
use App\Models\SellSpec;
use App\Models\GetPid;

class CartDetailController extends Controller
{
    function __construct() {
        $this->cartproduct = new CartProduct();
        $this->sellspec = new SellSpec();
        $this->mid = new GetPid();
    }

    public function action(Request $request) {
        $membertoken = $request->cookie('token');
        $mid = $this->mid->respid($membertoken);
        $cartpro = $this->cartproduct->cartpro($mid);
        $spec = $this->sellspec->spec($mid);
        return view('checkoutpage.cart', ['cartproduct' => $cartpro, 'sellspec' => $spec]);
    }
    public function action1(Request $request) {
        $membertoken = $request->cookie('token');
        $mid = $this->mid->respid($membertoken);
        $cartpro = $this->cartproduct->cartpro($mid);
        $spec = $this->sellspec->spec($mid);
        return view('checkoutpage.information', 
            ['cartproduct' => $cartpro, 
                'sellspec' => $spec, 
            ]);
    }
}

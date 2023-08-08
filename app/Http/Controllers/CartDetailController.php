<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartProduct;
use App\Models\SellSpec;

class CartDetailController extends Controller
{
    function __construct() {
        $this->cartproduct = new CartProduct();
        $this->sellspec = new SellSpec();
    }

    public function action() {
        $cartpro = $this->cartproduct->cartpro();
        $spec = $this->sellspec->spec();
        return view('checkoutpage.cart', ['cartproduct' => $cartpro, 'sellspec' => $spec]);
    }
    public function action1() {
        $cartpro = $this->cartproduct->cartpro();
        $spec = $this->sellspec->spec();
        return view('checkoutpage.information', 
            ['cartproduct' => $cartpro, 
                'sellspec' => $spec, 
            ]);
    }
}

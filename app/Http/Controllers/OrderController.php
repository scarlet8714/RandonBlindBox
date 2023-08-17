<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetPid;
use App\Models\OrderSubmit;
use TsaiYiHua\ECPay\Checkout;

class OrderController extends Controller
{
    protected $checkout;

    function __construct(Checkout $checkout){
        $this->mid = new GetPid();
        $this->order = new OrderSubmit();
        $this->checkout = $checkout;
        $this->checkout->setReturnUrl('https://ba1b-118-163-218-100.ngrok-free.app/callback');
    }
    //
    public function order(Request $request){
        // return $request->ta;
        $membertoken = $request->cookie('token');
        $mid = $this->mid->respid($membertoken);
        $oid = (string)rand(1, 9) + substr((string)(rand(0, 99999999) / 100000000), 2, -1);
        $result = $this->order->ordersubmit($oid, $mid[0]->mid, $request->rname, $request->rphone, $request->pm, 1, $request->dm);
        $formData = [
            'UserId' => 1, // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'ItemName' => 'BlindBox',
            'TotalAmount' => $request->ta,
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];
        return $this->checkout->setPostData($formData)->send();
        // return $result;
        // return $request->rname;
    }
    public function callback() {
        return view('checkoutpage.confirm');
    }

}
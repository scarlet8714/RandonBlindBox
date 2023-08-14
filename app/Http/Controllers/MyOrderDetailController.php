<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\MyOrderTotal;
use App\Models\MyOrderDetail;
use App\Models\ProductAll;
use App\Models\BlindPhoto;
use App\Models\GetPid;
use App\Models\GetMember;

class MyOrderDetailController extends Controller
{
    //
    function __construct(){
        $this->detail = new MyOrderDetail();
        $this->product = new ProductAll();
        $this->blind = new BlindPhoto();
        $this->getpid = new GetPid();
        $this->getm = new GetMember();
    }
    public function action($oid, Request $request){

        $token = $request->cookie('token');
        $mid = $this->getpid->respid($token);
        $member = $this->getm->getmember($mid);
        $productall = [];
        $temp = $this->detail->orderdetail($oid);
        foreach($temp[1] as $item) {
            $producttemp = $this->product->imgpath($item->pid);
            $blindtemp = $this->blind->blind($item->pid);
            $tempobj = (object)[];
            $tempobj->imgpath = $blindtemp[0]->open;
            $tempobj->name = $producttemp[0]->name;
            $tempobj->price = $producttemp[0]->price;
            $tempobj->quantity = $item->quantity;
            $productall[] = $tempobj;
        }
        // dd($productall);

        return view('membercenterpage.orderdetail', ['orderdetail' => $temp[0], 'productall' => $productall, 'member'=>$member]);
    }
}

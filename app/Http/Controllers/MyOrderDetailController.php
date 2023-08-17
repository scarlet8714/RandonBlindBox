<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\MyOrderTotal;
use App\Models\MyOrderDetail;
use App\Models\ProductAll;
use App\Models\BlindPhoto;
use App\Models\GetPid;
use App\Models\GetMember;
use App\Models\SlotAction;

class MyOrderDetailController extends Controller
{
    //
    function __construct(){
        $this->detail = new MyOrderDetail();
        $this->product = new ProductAll();
        $this->blind = new BlindPhoto();
        $this->getpid = new GetPid();
        $this->getm = new GetMember();
        $this->getoproduct = new SlotAction();
    }
    public function action($oid, Request $request){

        $token = $request->cookie('token');
        $mid = $this->getpid->respid($token);
        $member = $this->getm->getmember($mid);
        $orderPrize = $this->getoproduct->getOrderPrize($oid);
        $remainTimes = [];
        $productall = [];
        $temp = $this->detail->orderdetail($oid);
        $i = 0;
        foreach($temp[1] as $item) {
            
            $producttemp = $this->product->imgpath($item->pid);
            $blindtemp = $this->blind->blind($item->pid);
            $tempobj = (object)[];
            $tempobj->imgpath = $blindtemp[0]->open;
            $tempobj->name = $producttemp[0]->name;
            $tempobj->price = $producttemp[0]->price;
            $tempobj->pid = $producttemp[0]->pid;
            $tempobj->quantity = $item->quantity;
            $productall[] = $tempobj;
        }
        // dd($productall);

        foreach($productall as $item) {
            $remainTimes[$item->pid][] =  $this->getoproduct->checkTimes($mid[0]->mid, $item->pid)[0];
        }
        // dd($remainTimes);

        return view('membercenterpage.orderdetail', ['orderdetail' => $temp[0], 'productall' => $productall, 'member'=>$member, 'prize' => $orderPrize, 'times' => $remainTimes]);
    }
}

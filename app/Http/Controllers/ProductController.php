<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductAll;
use App\Models\ProductPhotoAll;
use App\Models\Delipay;
use App\Models\ProductListHot;
use App\Models\GetPid;
use App\Models\AddLike;

class ProductController extends Controller
{
    function __construct() {
        $this->product = new ProductAll();
        $this->productphoto = new ProductPhotoAll();
        $this->payment = new Delipay();
        $this->hotmodel = new ProductListHot();
        $this->mid = new GetPid();
        $this->like = new AddLike();

    }
    //   
    public function action($pid){
        $pro = $this->product->imgpath($pid);
        $proph = $this->productphoto->imgpath($pid);
        $pay = $this->payment->payment($pid);
        $hot = $this->hotmodel->imgpath();
        return view('productdetail', ['product'=> $pro, 'productphoto' => $proph, 'payment' => $pay, 'hot' => $hot]);
    }
    public function like(Request $request){
        $membertoken = $request->cookie('token');
        $mid = $this->mid->respid($membertoken);
        $this->like->addlike($mid[0]->mid, $request->pid);
        return 'success';
    }
}

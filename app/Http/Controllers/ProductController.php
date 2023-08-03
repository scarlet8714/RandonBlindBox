<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductAll;
use App\Models\ProductPhotoAll;
use App\Models\Delipay;
use App\Models\ProductListHot;

class ProductController extends Controller
{
    function __construct() {
        $this->product = new ProductAll();
        $this->productphoto = new ProductPhotoAll();
        $this->payment = new Delipay();
        $this->hotmodel = new ProductListHot();
    }
    //   
    public function action(){
        $pro = $this->product->imgpath();
        $proph = $this->productphoto->imgpath();
        $pay = $this->payment->payment();
        $hot = $this->hotmodel->imgpath();
        return view('productdetail', ['product'=> $pro, 'productphoto' => $proph, 'payment' => $pay, 'hot' => $hot]);
    }
}

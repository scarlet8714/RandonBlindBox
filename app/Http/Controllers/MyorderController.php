<?php

// MyorderController.php 控制器
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyOrder;

class MyorderController extends Controller
{
    //
    function __construct() {
        $this->orderNum = new Myorder();
    }

    public function action(){
        $order = $this->orderNum->orderTable();
        return view('membercenterpage.myorder', ['orderNum' => $order]);
    }
}



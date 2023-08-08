<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Https;
use App\Models\CollectModel;
use App\Models\GetPid;

class CollectController extends Controller
{
    function __construct() {
        $this->collect = new CollectModel();
        $this->user = new GetPid();
    }

    function show() {
        $result = $this->collect->getProduct();

        // echo rand('20', '40') . date('md') . rand('100', '999') . date('His');
        return view('collection', ['product' => $result]);
    }

    function collectDetail(Request $request) {
        $types =  $this->collect->getProductDetails($request->pid);
        return json_encode($types);
    }
}

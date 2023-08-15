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
        setcookie('token', 'd5716fec-29f6-11ee-8e3f-28b20503fdef', time()+9999999);
    }

    function show() {
        $result = $this->collect->getProduct($_COOKIE['token']);
        // echo rand('20', '40') . date('md') . rand('100', '999') . date('His');
        return view('collection', ['product' => $result]);
    }

    function collectDetail(Request $request) {
        $types =  $this->collect->getProductDetails($request->pid);
        return json_encode($types);
    }

    function showTypes(Request $request) {
        $result = $this->collect->getProductTypes($request->pid, $_COOKIE['token']);
        // var_dump($result);
        return view('components.collect.collection-dialog', ['product' => $result[0][0], 'types' => $result[1]]);
    }
}

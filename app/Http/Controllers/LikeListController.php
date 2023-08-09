<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetPid;
use App\Models\LikeList;

class LikeListController extends Controller
{
    //
    function __construct(){
        $this->mid = new GetPid();
        $this->like = new LikeList();
    }

    public function action(Request $request){
        $membertoken = $request->cookie('token');
        $mid = $this->mid->respid($membertoken);
        $res = $this->like->likelist($mid[0]->mid);
        dd($res);
    }
}

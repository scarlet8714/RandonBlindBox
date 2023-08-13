<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetMember;
use App\Models\GetPid;

class MyAccountController extends Controller
{
    function __construct(){
        $this->member = new Getmember();
        $this->mid = new GetPid();
    }
    //
    public function action(Request $request){
        $membertoken = $request->cookie('token');
        $mid = $this->mid->respid($membertoken);
        $res = $this->member->getmember($mid);
        return view('membercenterpage.myaccount', ['member' => $res]);
    }
}

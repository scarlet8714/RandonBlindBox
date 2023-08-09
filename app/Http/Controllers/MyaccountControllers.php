<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class MyaccountControllers extends Controller
{
    //
    function __construct() {
        $this->memberdata = new Member();
    }

    public function action(){
        $mailmember = $this->memberdata->memberEmail();
        return view('membercenterpage.myaccount', ['memberdata'=> $mailmember]);

    }
}



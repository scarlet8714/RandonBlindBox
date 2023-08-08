<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(){
        return view('loginpage', ['mode'=>'login']);
    }
    public function register(){
        return view('loginpage', ['mode'=>'regis']);
    }
    public function forgetPassword(){
        return view('loginpage', ['mode'=>'forget']);
    }
    public function resetPassword(){
        return view('loginpage', ['mode'=>'reset']);
    }
}

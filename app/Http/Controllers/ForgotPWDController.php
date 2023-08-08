<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPWDController extends Controller
{
    //
    public function forgotpwd(){
        $details = [
            'title' => 'RandomBlindBox帳號重設密碼',
            'first' => '您好，喵星人，請點選',
            'address' => 'localhost:8000/resetpwd',
            'second' => '以重設您的密碼'
        ];
       
        \Mail::to('randomm0824@gmail.com')->send(new \App\Mail\forgotpassword($details));
    }
}

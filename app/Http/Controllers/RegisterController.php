<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    function __construct(){
        $this->regis = new Register();
    }
    //
    public function action(Request $request) {

        
        $name = $request->name;
        $phone = $request->phone;
        $password = $request->pwd;
        $mail = $request->email;
        $birthday = $request->birthday;
        $res = $this->regis->register($name, $phone, $password, $mail, $birthday);
        $details = [
            'title' => 'RandomBlindBox帳號啟用',
            'first' => '您好，' . $res[0]->name . '，請點選',
            'address' => '/login',
            'second' => '以啟用您的帳號'
        ];
        \Mail::to($res[0]->mail)->send(new \App\Mail\forgotpassword($details));
        return view('pwdpage.regissent');
        
    }
}

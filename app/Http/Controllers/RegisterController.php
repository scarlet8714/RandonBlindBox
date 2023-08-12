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
        $this->regis->register($name, $phone, $password, $mail, $birthday);
        
    }
}

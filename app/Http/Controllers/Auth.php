<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authenticate;
use Illuminate\Support\Facades\Cookie;

class Auth extends Controller
{
    function __construct(){
        $this->auth = new Authenticate();
    }
    //
    public function auth(Request $request){
        $account = $request->account;
        $password = $request->password;
        $res = $this->auth->auth($account, $password);
        if($res[0]->result == 'success'){ 
            Cookie::queue('token', $res[0]->token, 2628000);
        }
        return redirect('/');

    }
}

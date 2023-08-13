<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResetPWD;

class ResetPWDController extends Controller
{
    function __construct(){
        $this->reset = new ResetPWD();
    }
    //
    public function resetpage(){
        return view('resetpage');
    }
    public function reset(){
        $this->reset->reset($pwd);
    }
}

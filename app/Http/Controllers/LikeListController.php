<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetPid;
use App\Models\LikeList;
use App\Models\ProductAll;

class LikeListController extends Controller
{
    //
    function __construct(){
        $this->mid = new GetPid();
        $this->like = new LikeList();
        $this->product = new ProductAll();
    }

    public function action(Request $request){
        $membertoken = $request->cookie('token');
        $mid = $this->mid->respid($membertoken);
        $temp = $this->like->likelist($mid[0]->mid);
        $res = [];
        foreach($temp as $item) {
            $temp2 = $this->product->imgpath($item->pid);
            $res[] = $temp2;
        }
        // dd($res);
        return view('membercenterpage.favoritelist', ['product' => $res]) ;
        
    }
}

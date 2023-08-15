<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UpdateCart;

class UpdateCartController extends Controller
{
    //
    function __construct(){
        $this->update = new UpdateCart();
    }

    public function updatecart(Request $request){
        foreach($request->data as $item) { 
                $this->update->uc($item['quantity'], $item['cid']);
        }
        // return get_object_vars($request);
        return $request->data;
        // return;
    }
}

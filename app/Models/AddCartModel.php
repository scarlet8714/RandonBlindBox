<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AddCartModel extends Model
{
    use HasFactory;
    public function addcart($mid, $pid, $sid, $quantity){
        
        $result = DB::select("call addcart(?, ?, ?, ?)", [$mid, $pid, $sid, $quantity]);
        return $result;
    }
}

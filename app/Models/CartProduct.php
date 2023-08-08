<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CartProduct extends Model
{
    use HasFactory;
    public function cartpro($mid){
        $cartproduct = DB::select('select * from `cart` as c left join product as p on c.pid = p.pid where mid = ?;', [$mid[0]->mid]);
        return $cartproduct;
    }
}

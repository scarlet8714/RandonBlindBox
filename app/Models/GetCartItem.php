<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GetCartItem extends Model
{
    use HasFactory;
    public function getcartitem($mid){
        $res = DB::select('select * from `cart` as c left join product as p on c.pid = p.pid where mid = ?;', [$mid]);
        return $res;
    }
}

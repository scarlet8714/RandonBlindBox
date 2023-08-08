<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SellSpec extends Model
{
    use HasFactory;
    public function spec() {
        $sellspec = DB::select('select * from `cart` as c left join sell_sepc as s on c.pid = s.sid where mid = 1;');
        return $sellspec;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SellSpec extends Model
{
    use HasFactory;
    public function spec($mid) {
        $sellspec = DB::select('select * from `cart` as c left join sell_sepc as s on c.sid = s.sid where mid = ?;', [$mid[0]->mid]);
        return $sellspec;
    }
}

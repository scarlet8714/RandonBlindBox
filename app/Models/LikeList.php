<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LikeList extends Model
{
    use HasFactory;
    public function likelist($mid) {
        $res = DB::select('select * from collect where mid = ?', [$mid]);
        return $res;
    }
}

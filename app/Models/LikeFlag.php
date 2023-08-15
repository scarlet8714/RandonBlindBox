<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class LikeFlag extends Model
{
    use HasFactory;
    public function like($mid, $pid) {
        $flag = DB::select('select * from collect where mid = ? and pid = ?', [$mid, $pid]);
        return $flag;
    }
}

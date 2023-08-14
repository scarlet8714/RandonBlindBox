<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AddLike extends Model
{
    use HasFactory;
    public function addlike($mid, $pid){
        $flag = DB::select('select * from collect where mid = ? and pid = ?', [$mid, $pid]);
        if($flag) {
            DB::delete('delete from collect where mid = ? and pid = ?', [$mid, $pid]);
        } else {
            DB::insert('insert into collect (mid, pid) values (?, ?)', [$mid, $pid]);
        }
        return;
    }
}

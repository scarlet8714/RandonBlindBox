<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Authenticate extends Model
{
    use HasFactory;
    public function auth($mymail, $mypwd){
        return DB::select("call login(?, ?)", [$mymail, $mypwd]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ResetPWD extends Model
{
    use HasFactory;
    public function reset($pwd){
        DB::update('update member set pwd = ? where mid = 5', [$pwd]);
    }
}

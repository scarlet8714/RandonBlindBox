<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GetPid extends Model
{
    use HasFactory;
    public function respid($token){
        $mid = DB::select('SELECT mid from member where token = ?', [$token]);
        return $mid;
    }
}

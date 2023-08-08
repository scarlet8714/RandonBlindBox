<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Member extends Model
{
    use HasFactory;
    public function memberEmail(){
        $membermail = DB::select('select * from member where mid = 3;');
        return $membermail;

    }
}

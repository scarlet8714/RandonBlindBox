<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Register extends Model
{
    use HasFactory;
    public function register($name, $phone, $password, $mail, $birthday){
        DB::insert('insert into member (name, phone, password, mail, birthday, level, active) values (?, ?, ?, ?, ?, ?, ?)', [$name, $phone, $password, $mail, $birthday, 1, 1]);
        $res = DB::select('select * from member where mail = ? and password = ?', [$mail, $password]);
        return $res;
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Register extends Model
{
    use HasFactory;
    public function register($name, $phone, $password, $mail, $birthday){
        DB::insert('insert into member (name, phone, password, mail, birthday, level, regis_token) values (?, ?, ?, ?, ?, ?, uuid())', [$name, $phone, $password, $mail, $birthday, 1]);
    }
}

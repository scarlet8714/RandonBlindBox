<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UpdateCart extends Model
{
    use HasFactory;
    public function uc($quantity, $cid){
        DB::update('update cart set quantity = ? where cid = ?', [$quantity, $cid]);
    }
    
}

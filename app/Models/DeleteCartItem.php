<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DeleteCartItem extends Model
{
    use HasFactory;
    public function dci($cid){
        DB::delete('delete from cart where cid = ?', [$cid]);
    }
}

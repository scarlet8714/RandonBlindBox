<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductAll extends Model
{
    use HasFactory;
    public function imgpath($pid){
        $product = DB::select('select * from product where pid = ?;', [$pid]);
        return $product;
    }
}

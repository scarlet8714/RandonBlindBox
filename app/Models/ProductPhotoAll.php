<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductPhotoAll extends Model
{
    use HasFactory;
    public function imgpath(){
        $productphoto = DB::select('select * from product_photo where pid = 1;');
        return $productphoto;
    }
}

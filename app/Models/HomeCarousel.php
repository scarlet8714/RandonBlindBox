<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HomeCarousel extends Model
{
    use HasFactory;
    public function imgpath() {
        $imgpaths = DB::select("select * from main_page_carousel");
        return $imgpaths;
    }
}

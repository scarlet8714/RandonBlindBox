<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SeriesContent extends Model
{
    use HasFactory;
    public function imgpath($series){
        $seriesimg = DB::select("select * from product where gate = ?", [$series]);
        return $seriesimg;
    }
}

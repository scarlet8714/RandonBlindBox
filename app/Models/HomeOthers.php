<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class HomeOthers extends Model
{
    use HasFactory;
    public function imgpath() {
        $imgpaths = DB::select("select * from main_page");
        $toy = [];
        $blind = [];
        $toy_rec_count = 0;
        $blind_squ_count = 0;
        $blind_rec_count = 0;
        foreach ($imgpaths as $index => $imgpath) {
            if ($imgpath->sid == 3 && $imgpath->square == 0) {
                $toy['square_0'] = $imgpath;
            } elseif ($imgpath->sid == 3) {
                $toy['rectangle_' . $toy_rec_count] = $imgpath;
                $toy_rec_count += 1;
            } elseif ($imgpath->sid == 1 && $imgpath->square == 0) {
                $blind['square_' . $blind_squ_count] = $imgpath;
                $blind_squ_count += 1;
            } else {
                $blind['rectangle_' . $blind_rec_count] = $imgpath;
                $blind_rec_count += 1;
            }
        }
        return [$toy, $blind];
    }
}

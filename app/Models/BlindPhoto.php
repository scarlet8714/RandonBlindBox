<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlindPhoto extends Model
{
    use HasFactory;
    public function blind($pid) {
        $res = DB::select('select * from `blind_photo` where pid = ?', [$pid]);
        return $res;
    }
}

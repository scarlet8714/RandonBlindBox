<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GetMember extends Model
{
    use HasFactory;
    public function getmember($mid){
        $res =DB::select('select * from member where mid = ?', [$mid[0]->mid]);
        return $res;
    }
}

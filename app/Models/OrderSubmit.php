<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrderSubmit extends Model
{
    use HasFactory;

    public function ordersubmit($myoid, $mymid, $rname, $rphone, $pm, $ps, $dm){
        $res = DB::select('call checkout(?, ?, ?, ?, ?, ?, ?)', [$myoid, $mymid, $rname, $rphone, $pm, $ps, $dm]);
        return $res[0]->result;
    }
}

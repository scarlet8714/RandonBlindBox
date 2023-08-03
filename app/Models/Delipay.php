<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Delipay extends Model
{
    use HasFactory;
    public function payment(){
        $str = DB::select('SELECT d.method as store, p.method as pay FROM deliver as d left join payment as p on d.did = p.did;');
        return $str;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class allhistory extends Controller
{
    //
    function list()
    {
        $data= DB::table('histories')->paginate(5);
        return view('allhistory',['data'=>$data]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class DB_controller extends Controller
{
function username(){
    //    $usr =  DB::table('users')
    //    ->where('name', 'Paweł Sydorowicz')
    //    ->get();

    $usr = DB::table('users')
    ->where('id', 1)
    ->get('email');

    print_r($usr);
}


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class cantor_ctrl extends Controller
{
    function calculator(){
        $tab = Http::get('http://api.nbp.pl/api/exchangerates/tables/C')->json();
        return view('adminlte.kantor', ['tab' => $tab]);
    }
}

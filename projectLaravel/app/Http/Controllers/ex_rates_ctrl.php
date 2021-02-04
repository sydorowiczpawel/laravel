<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ex_rates_ctrl extends Controller
{
    function APIrates(){
        $tab = Http::get('http://api.nbp.pl/api/exchangerates/tables/C')->json();
        return view('adminlte.rates', ['tab'=>$tab]);
    }
}

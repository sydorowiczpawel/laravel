<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Data extends Controller
{
    function list(){
        $tab = Http::get('http://jsonplaceholder.typicode.com/posts')->json();

        return view('data', ['tab'=>$tab]);
    }

    function album(){
        $tab = Http::get('http://jsonplaceholder.typicode.com/albums')->json();
        // return view('album', ['tab'=>$tab]);
        $tab = Http::get('http://jsonplaceholder.typicode.com/photos')->json();
        return view('album', ['tab'=>$tab]);

        //wyswietl dane ze strony  /album, tytuł, zdjęcie albumów
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mypage_controller extends Controller
{
    function mypage(){
        return view('adminlte.mypage');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminlte.dashboard');
    }

    // function DB_getUsername() {
    //     $usersid = DB::select('select id from users');
    //     return view('adminlte.dashboard', ['usersid'=>$usersid]);
    // }
}
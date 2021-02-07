<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class admin_controller extends Controller
{
    function index(){
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('adminlte.admin')->with('users', $users);
    }

    public function edit($id){
        $user = User::find($id);
        return view('/adminlte.editUser')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        //Update a User
        $user = User::find($id);
        $name = $request->input('name');
        $email = $request->input('email');
        $account = $request->input('account_number');
        $idk = $request->input('user_id');
        $password = $request->input('password');
        $saldo = $request->input('saldo');

        DB::table('users')
        ->where('id', 1)
        ->update(
            [
                'name'=>$name,
                'email'=>$email,
                'account_number'=>$account,
                'user_id'=>$idk,
                'password'=>$password,
                'saldo'=>$saldo
            ]
        );

        return redirect('/userAccount');

    }

    public function create()
    {
        return view('adminlte.editUser');
    }

    public function deleteUser($id){
        $users = DB::table('users')
        ->where(['id' => $id])
        ->delete();

        return redirect('/admin');
    }
}
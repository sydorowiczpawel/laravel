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
        $input = $request->all();

        //Update a User
        $user = User::find($id);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->save();

        return redirect('/admin')->with('success', 'Udało się');
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
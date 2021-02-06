<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class mypage_controller extends Controller
{
    // function index(){
    //     $records = User::all();
    //     return view('adminlte.mypage')->with('records', $records);
    // }

    public function edit($id){
        $user = User::find($id);
        return view('/adminlte.editUser')->with('user', $user);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'account_number' => 'required',
        'user_id' => 'required',
        'password' => 'required'
    ]);

        //Create new user
        $record = new User();
        $record->name = $request->input('name');
        $record->email = $request->input('email');
        $record->account_number = $request->input('account_number');
        $record->user_id = $request->input('user_id');
        $record->password = $request->input('password');
        $record->save();

        return redirect('/mypage')->with('success', 'Wpis utworzony pomyślnie');
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        //Update a User
        $user = User::find($id);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->account_number = $input['account_number'];
        $user->user_id = $input['user_id'];
        $user->password = $input['password'];
        $user->save();

        return redirect('/mypage')->with('success', 'Udało się');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transfer;
use App\Models\History;
use Illuminate\Support\Facades\DB;


class TransferController extends Controller
{
    public function index()
    {
        return view('adminlte.transfer');
    }

    public function create()
    {
        return view('adminlte.transfer');
    }

    public function store(Request $request)
    {
        $tr = $request->input('transaction');
        $u_idk = $request->input('user_id');
        $u_account = $request->input('account_number');
        $r_idk = $request->input('reciever_idk');
        $r_account = $request->input('reciever_account');
        $title = $request->input('title');
        $quote = $request->input('quote');
        $date = date("Y-m-d");

        DB::table('histories')
        ->insert(
            [
                'transaction'=>$tr,
                'account_number'=>$u_account,
                'user_id'=>$u_idk,
                'receiver_idk'=>$r_idk,
                'receiver_account'=>$r_account,
                'title'=>$title,
                'quote'=>$quote,
                'data'=>$date
            ]
        );

        DB::table('bank_accounts')
        ->where('account_number', $r_account)
        ->increment('saldo', $quote);

        DB::table('bank_accounts')
        ->where('account_number', $u_account)
        ->decrement('saldo', $quote);

        DB::table('users')
        ->where('account_number', $r_account)
        ->increment('saldo', $quote);

        DB::table('users')
        ->where('account_number', $u_account)
        ->decrement('saldo', $quote);



        return redirect('/home');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

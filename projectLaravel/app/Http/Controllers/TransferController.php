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
        $reciever = $request->input('reciever_name');
        $account = $request->input('reciever_account_number');
        $title = $request->input('title');
        $quote = $request->input('quote');

        DB::table('transfers')
        ->insert(
            [
                'reciever_name'=>$reciever,
                'reciever_account_number'=>$account,
                'title'=>$title,
                'quote'=>$quote,
            ]
            );
    //     $this->validate($request, [
    //         // 'contractor' => 'required',
    //         'reciever_name' => 'required',
    //         'reciever_account_number'=> 'required',
    //         'title'=> 'required',
    //         'quote'=> 'required'
    //     ]);

    //     // Create and save transaction in DB/transaction
    //     $tr = new Transfer();
    //     // $tr->contractor = $request->input('contractor');
    //     $tr->reciever_name = $request->input('reciever_name');
    //     $tr->reciever_account_number = $request->input('reciever_account_number');
    //     $tr->title = $request->input('title');
    //     $tr->quote = $request->input('quote');
    //     $tr->save();

    //     //Create and save transaction in DB/history
    //     $hst = new History();
    //     $hst->transaction = $request->input('name');
    //     $hst->localization = $request->input('title');
    //     $hst->cuote = $request->input('quote');
    //     $hst->save();


    //     return redirect('/home');
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

    // public function transferOut(Request $request){
    //     $account_number = $request->input('account_number');
    //     $data = date("Y-m-d");
    //     $price = $request->input('price');
    //     $receiver_name= $request->input('receiver_number');
    //     $receiver_number = $request->input('receiver_number');
    //     $title = $request->input('title');

    //     DB::table('history_accounts')
    //         ->insert(
    //             [   
    //                 'account_number'=>$account_number,
    //                 'data'=>$data,
    //                 'receiver_name'=>$receiver_name,
    //                 'receiver_number'=>$receiver_number,       
    //                 'title'=>$title,
    //                 'price'=>$price
    //             ]
    //         );
    //     DB::table('bank_accounts')
    //         ->where(
    //             'account_number', $receiver_number
    //         )
    //         ->increment(
    //            'saldo', $price
    //         );
    //     DB::table('bank_accounts')
    //         ->where(
    //             'account_number',$account_number
    //         )
    //         ->decrement(
    //             'saldo', $price
    //         );
    //     return 'Twój przelew został wykonany.
    //     <a href="home">Powrót do strony głównej</a>
    //     ';
    // }
}

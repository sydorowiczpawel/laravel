<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function index()
    {
        $records = History::orderBy('id', 'desc')->paginate(6);
        return view('adminlte.history')->with('records', $records);
    }

    public function create()
    {
        return view('adminlte.createHistory');
    }

    public function store(Request $request)
    {
        $u_acc = $request->input('account_number');
        $u_idk = $request->input('user_id');
        $date = date("Y-m-d");
        $tr = $request->input('transaction');
        $loc = $request->input('localization');
        $quote = $request->input('quote');

        DB::table('histories')
        ->insert(
            [
                'account_number'=>$u_acc,
                'user_id'=>$u_idk,
                'data'=>$date,
                'transaction'=>$tr,
                'localization'=>$loc,
                'quote'=>$quote,
            ]
            );

        return redirect('/history')->with('success', 'Wpis utworzony pomyślnie');
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

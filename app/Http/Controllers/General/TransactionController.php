<?php

namespace App\Http\Controllers\General;

use DB;
use App\Account;
use App\DetailTransaction;
use App\Http\Controllers\Controller;
use App\Models\Master\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $data['data'] = DetailTransaction::all();

        return view('pages.transaction.index', compact('data'));
    }

    public function create()
    {
        $accounts = Account::all();

        $transactions = Transaction::all();

        return view('pages.transaction.create', compact('accounts', 'transactions'));
    }

    public function store(Request $request)
    {
        $selectAkun = DB::table('accounts')->where('id', $request->get('account_id'))->first();
        $cekTransaksi = DB::table('transactions')->where('id', $request->get('transaction_id'))->first();

        if ($cekTransaksi->type == 'D') {
            $account = Account::findOrFail($request->get('account_id'));

            $accountInitSaldo = $account->init_saldo;

            $totalSaldo = $request->get('nominal');

            $totalSemua = $accountInitSaldo + $totalSaldo;

            $account->update(['init_saldo' => $totalSemua]);
        } else {
            $account = Account::findOrFail($request->get('account_id'));

            $accountInitSaldo = $account->init_saldo;

            $totalSaldo = $request->get('nominal');

            $totalSemua = $accountInitSaldo - $totalSaldo;

            $account->update(['init_saldo' => $totalSemua]);
        }

        $input = $request->except('_token');
        $input['created_at'] = Carbon::parse($input['created_at'])->format('Y-m-d H:i:s');
        DetailTransaction::create($input);

        return redirect()->route('transaction');
    }
}

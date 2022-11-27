<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Transaction, Drug};
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
    public function index() 
    {
    	return view('data/transaction/index', [
    		'transaction' => Transaction::latest()->get()
    	]);
    }

    public function show(Transaction $transaction)
    {
    	return view('data/transaction/show', [
            'transaction' => $transaction
        ]);
    }

    public function add()
    {
    	return view('data/transaction/add', [
            'drugs' => Drug::get()
        ]);
    }

    public function store(TransactionRequest $request)
    {
        $data = $request->all();

        Transaction::create($data);

        return redirect('/transaction')->with('created', 'transaksi baru berhasil ditambahkan');
    }

    public function edit(Transaction $transaction)
    {
        return view('/data/transaction/edit', [
            'transaction' => $transaction
        ]);
    }

    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $data = $request->all();

        $transaction->update($data);

        return redirect('/transaction')->with('updated', 'transaksi berhasil diupdate');
    }

    public function delete(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->to('/transaction')->with('deleted', 'transaksi berhasil dihapus');
    }
}

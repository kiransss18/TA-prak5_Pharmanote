<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Http\Requests\SupplierRequest;

class SupplierController extends Controller
{
    public function index()
    {
    	return view('data/supplier/index', [
    		'supplier' => Supplier::latest()->get()
    	]);
    }

    public function show(Supplier $supplier)
    {
    	return view('data/supplier/show', [
            'supplier' => $supplier
        ]);
    }

    public function add()
    {
    	return view('data/supplier/add');
    }

    public function store(SupplierRequest $request)
    {
        $data = $request->all();

        Supplier::create($data);

        return redirect('/supplier')->with('created', 'supplier baru berhasil ditambahkan');
    }

    public function edit(Supplier $supplier)
    {
        return view('/data/supplier/edit', [
            'supplier' => $supplier
        ]);
    }

    public function update(SupplierRequest $request, Supplier $supplier)
    {
        $data = $request->all();

        $supplier->update($data);

        return redirect('/supplier')->with('updated', 'Supplier berhasil diupdate');
    }

    public function delete(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->to('/supplier')->with('deleted', 'Supplier berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DrugRequest;
use App\Models\{Drug, Supplier};

class DrugController extends Controller
{
    public function index()
    {
    	return view('data/drug/index', [
    		'drugs' => Drug::latest()->get()
    	]);
    }

    public function show(Drug $drug)
    {
    	return view('/data/drug/show', [
            'drug' => $drug
        ]);
    }

    public function add()
    {
    	return view('data/drug/add', [
            'suppliers' => Supplier::get()
        ]);
    }

    public function store(DrugRequest $request)
    {
    	if ($request->file('icon')) {
    		$icon = $request->file('icon')->store('images/drugs');
    	} else {
    		$icon = 'images/drugs/default.png';
    	}

        $data = $request->all();
        $data['icon'] = $icon;

        Drug::create($data);

        return redirect('/drug')->with('created', 'Obat Berhasil Ditambahkan');
    }

    public function edit(Drug $drug)
    {
        return view('/data/drug/edit', [
            'drug' => $drug,
            'suppliers' => Supplier::get()

        ]);
    }

    public function update(DrugRequest $request, Drug $drug)
    {
        if ($request->file('icon')) {
            if ($drug->icon === 'images/drugs/default.png') {
                $icon = $request->file('icon')->store('images/drugs');
            } else {
                \Storage::delete($drug['icon']);
                $icon = $request->file('icon')->store('images/drugs');
            }
        } else {
            $icon = $drug['icon'];
        }

        $data = $request->all();
        $data['icon'] = $icon;

        $drug->update($data);

        return redirect('/drug')->with('updated', 'Obat Berhasil diupdate');
    }

    public function delete(Drug $drug)
    {
        if ($drug->icon !== 'images/drugs/default.png') {
            \Storage::delete($drug['icon']);
        }

        $drug->delete();

        return redirect()->to('/drug')->with('deleted', 'Obat Berhasil dihapus');
    }
}
















<?php

namespace App\Http\Controllers;

use App\Models\Databarang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DatabarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $halamanJudul = 'Data Barang';

        $databarangs = Databarang::all();

        return view('databarangs.index',['halamanJudul' => $halamanJudul, 'databarangs' => $databarangs

    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $halamanJudul = 'Data Barang';

        $satuans = Satuan::all();

        return view('databarangs.create', compact('halamanJudul','satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'nama_barang' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|numeric',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //insert
        $databarang = New Databarang;
        $databarang->kode_barang = $request->kode_barang;
        $databarang->nama_barang = $request->nama_barang;
        $databarang->harga_barang = $request->harga_barang;
        $databarang->deskripsi_barang = $request->deskripsi_barang;
        $databarang->satuan_id = $request->satuan;
        $databarang->save();
        return redirect()->route('databarangs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

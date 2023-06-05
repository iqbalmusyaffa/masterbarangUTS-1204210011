<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DatasatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $halamanJudul = 'Data Satuan';

        $satuans = Satuan::all();

        return view('datasatuans.index',['halamanJudul' => $halamanJudul, 'satuans' => $satuans
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $halamanJudul = 'Data Satuan';

        $satuans = Satuan::all();

        return view('datasatuans.create', compact('halamanJudul','satuans'));
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
            'kode_satuan' => 'required',
            'nama_satuan' => 'required',
            'dekripsi' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //insert
        $satuans = New Satuan();
        $satuans->kode_satuan = $request->kode_satuan;
        $satuans->nama_satuan = $request->nama_satuan;
        $satuans->dekripsi = $request->dekripsi;
        $satuans->save();
        return redirect()->route('datasatuans.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $halamanJudul = 'Data Barang show';

        $satuans= Satuan::find($id);

        return view('datasatuans.show', compact('halamanJudul','satuans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $halamanJudul = 'Data Barang edit';

        $satuan= Satuan::find($id);
        $satuans = Satuan::all();

        return view('datasatuans.edit', compact('halamanJudul','satuan','satuans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'nama_satuan' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'kode_satuan' => 'required',
            'nama_satuan' => 'required',
            'dekripsi' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //insert
        $satuans = Satuan::find($id);
        $satuans->kode_satuan = $request->kode_satuan;
        $satuans->nama_satuan = $request->nama_satuan;
        $satuans->dekripsi = $request->dekripsi;
        $satuans->save();
        return redirect()->route('datasatuans.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

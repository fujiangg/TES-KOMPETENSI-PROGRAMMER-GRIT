<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obat = Obat::all();
        return view('obat.index', compact('obat'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'nullable',
            'kode_obat' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'tanggal_kadaluarsa' => 'required',
            'keterangan' => 'nullable',
        ]);

        Obat::create($request->all());

        return redirect()->route('obat.index')->with('success', 'Data Obat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        return view('obat.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat)
    {
        return view('obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Obat $obat)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'nullable',
            'kode_obat' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'tanggal_kadaluarsa' => 'required',
            'keterangan' => 'nullable',
        ]);

        $obat->update($request->all());

        return redirect()->route('obat.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        $obat->delete();

        return redirect()->route('obat.index')->with('success', 'Data Obat berhasil dihapus.');    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\WilayahPasien;
use Illuminate\Support\Facades\Auth;

class WilayahPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wilayah = WilayahPasien::all();
        return view('wilayah_pasien.index', compact('wilayah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wilayah_pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'ttl' =>'required',
            'usia' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'kota_kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required|max:10',
        ]);

        WilayahPasien::create($request->all());

        return redirect()->route('wilayah_pasien.index')
                        ->with('success', 'Data Wilayah Pasien berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(WilayahPasien $wilayahPasien)
    {
        return view('wilayah_pasien.show', compact('wilayahPasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WilayahPasien $wilayahPasien)
    {
        return view('wilayah_pasien.edit', compact('wilayahPasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WilayahPasien $wilayahPasien)
    {
        $request->validate([
            'nama' => 'required',
            'ttl' =>'required',
            'usia' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'kota_kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required|max:10',
        ]);

        $wilayahPasien->update($request->all());

        return redirect()->route('wilayah_pasien.index')
                        ->with('success', 'Data Wilayah Pasien berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(wilayahPasien $wilayahPasien)
    {
        $wilayahPasien->delete();

        return redirect()->route('wilayah_pasien.index')
                        ->with('success', 'Data Wilayah Pasien berhasil dihapus.');
    }
}

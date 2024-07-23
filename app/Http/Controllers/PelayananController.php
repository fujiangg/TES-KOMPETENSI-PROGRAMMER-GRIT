<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pelayanan;
use Illuminate\Http\Request;
use App\Models\WilayahPasien;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelayanan = Pelayanan::with('pegawai','pasien')->get();
        return view('pelayanan.index', compact('pelayanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dokters = Pegawai::where('jabatan', 'Dokter')->pluck('nama_lengkap', 'id');
        $pasien = WilayahPasien::pluck('nama', 'id'); // Ambil daftar pasien dari tabel wilayah_pasien
        return view('pelayanan.create', compact('dokters', 'pasien'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pegawai_klinik_id' => 'required|exists:pegawai_klinik,id',
            'pasien_id' => 'required|exists:wilayah_pasien,id', // Validasi untuk pasien_id
            'jenis_pelayanan' =>'required',
            'tanggal_waktu' =>'required|date',
            'status' => 'required',
        ]);

        pelayanan::create($request->all());

        return redirect()->route('pelayanan.index')->with('success', 'Data pelayanan berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(pelayanan $pelayanan)
    {
        return view('pelayanan.show', compact('pelayanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pelayanan $pelayanan)
    {
        $dokters = Pegawai::where('jabatan', 'Dokter')->pluck('nama_lengkap', 'id');
        $pasien = WilayahPasien::pluck('nama', 'id'); // Ambil daftar pasien dari tabel wilayah_pasien
        return view('pelayanan.edit', compact('pelayanan','dokters','pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pelayanan $pelayanan)
    {
        $request->validate([
            'pegawai_klinik_id' => 'required|exists:pegawai_klinik,id',
            'pasien_id' => 'required|exists:wilayah_pasien,id', // Validasi untuk pasien_id
            'jenis_pelayanan' =>'required',
            'tanggal_waktu' =>'required|date',
            'status' => 'required',
        ]);

        $pelayanan->update($request->all());

        return redirect()->route('pelayanan.index')->with('success', 'Perubahan berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pelayanan $pelayanan)
    {
        $pelayanan->delete();

        return redirect()->route('pelayanan.index')
                        ->with('success', 'Data Pelayanan Klinik berhasil dihapus.');
    }
}

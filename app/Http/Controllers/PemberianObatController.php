<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Models\PemberianObat;
use App\Models\WilayahPasien;

class PemberianObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemberian_obat = PemberianObat::with('pasien','obat','pegawai')->get();
        return view('pemberian-obat.index', compact('pemberian_obat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasien = WilayahPasien::pluck('nama', 'id'); // Ambil daftar pasien dari tabel wilayah_pasien
        $obat = Obat::pluck('nama','id');
        $dokters = Pegawai::where('jabatan', 'Dokter')->pluck('nama_lengkap', 'id');
        return view('pemberian-obat.create',compact('pasien','obat','dokters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_pemberian' => 'required|date',
            'pasien_id' => 'required|exists:wilayah_pasien,id', // Foreign key ke tabel wilayah_pasien
            'obat_id' => 'required|exists:obat,id', // Foreign key ke tabel obat
            'jumlah' => 'required',
            'dosis' => 'required',
            'rute_pemberian' => 'required',
            'keterangan' => 'nullable',
            'pegawai_klinik_id' => 'required|exists:pegawai_klinik,id'
        ]);

        PemberianObat::create($request->all());

        return redirect()->route('pemberian_obat.index')->with('success', 'Data Pemberian Obat berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(PemberianObat $pemberian_obat)
    {
        return view('pemberian-obat.show', compact('pemberian_obat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PemberianObat $pemberian_obat)
    {
        $pasien = WilayahPasien::pluck('nama', 'id'); // Ambil daftar pasien dari tabel wilayah_pasien
        $obat = Obat::pluck('nama','id');
        $dokters = Pegawai::where('jabatan', 'Dokter')->pluck('nama_lengkap', 'id');
        return view('pemberian-obat.edit', compact('pemberian_obat','pasien','obat','dokters'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PemberianObat $pemberian_obat)
    {
        $request->validate([
            'tanggal_pemberian' => 'required|date',
            'pasien_id' => 'required|exists:wilayah_pasien,id', // Foreign key ke tabel wilayah_pasien
            'obat_id' => 'required|exists:obat,id', // Foreign key ke tabel obat
            'jumlah' => 'required',
            'dosis' => 'required',
            'rute_pemberian' => 'required',
            'keterangan' => 'nullable',
            'pegawai_klinik_id' => 'required|exists:pegawai_klinik,id'
        ]);

        $pemberian_obat->update($request->all());

        return redirect()->route('pemberian_obat.index')->with('success', 'Perubahan berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PemberianObat $pemberian_obat)
    {
        $pemberian_obat->delete();

        return redirect()->route('pemberian_
        obat.index')
                        ->with('success', 'Data Pemberian Obat Berhasil dihapus.');
    }
}

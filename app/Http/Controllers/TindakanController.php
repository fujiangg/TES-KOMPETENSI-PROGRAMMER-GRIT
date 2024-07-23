<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dokter;
use App\Models\Pegawai;
use App\Models\Tindakan;
use Illuminate\Http\Request;
use App\Models\WilayahPasien;
use Illuminate\Validation\Rule;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tindakan = Tindakan::with('pegawai', 'pasien')->get();
        return view('tindakan.index', compact('tindakan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dokters = Pegawai::where('jabatan', 'Dokter')->pluck('nama_lengkap', 'id');
        $pasien = WilayahPasien::pluck('nama', 'id'); // Ambil daftar pasien dari tabel wilayah_pasien
        return view('tindakan.create', compact('dokters', 'pasien'));    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tindakan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'required|string',
            'kode_tindakan' => 'required|string|unique:tindakan,kode_tindakan',
            'tanggal_waktu' => 'required|date',
            'durasi' => 'nullable|integer',
            'pegawai_klinik_id' => 'required|exists:pegawai_klinik,id',
            'pasien_id' => 'required|exists:wilayah_pasien,id', // Validasi untuk pasien_id
            'tempat' => 'required|string',
            'biaya' => 'required|numeric',
            'status' => 'required|string',
            'catatan_tambahan' => 'nullable|string',
            'resiko' => 'nullable|string',
            'hasil' => 'nullable|string',
            'tindak_lanjut' => 'nullable|string',
            'bahan_alat' => 'nullable|string',
        ]);

        Tindakan::create($request->all());

        return redirect()->route('tindakan.index')->with('success', 'Data Tindakan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tindakan $tindakan)
    {
        return view('tindakan.show', compact('tindakan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tindakan $tindakan)
    {
        $dokters = Pegawai::where('jabatan', 'Dokter')->pluck('nama_lengkap', 'id');
        $pasien = WilayahPasien::pluck('nama', 'id'); // Ambil daftar pasien dari tabel wilayah_pasien
        return view('tindakan.edit', compact('tindakan','dokters','pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_tindakan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'required|string',
            'kode_tindakan' => [
                'required',
                'string',
                Rule::unique('tindakan')->ignore($id), // Abaikan entri dengan ID ini
            ],
            'tanggal_waktu' => 'required|date',
            'durasi' => 'nullable|integer',
            'pegawai_klinik_id' => 'required|exists:pegawai_klinik,id',
            'pasien_id' => 'required|exists:wilayah_pasien,id',
            'tempat' => 'required|string',
            'biaya' => 'required|numeric',
            'status' => 'required|string',
            'catatan_tambahan' => 'nullable|string',
            'resiko' => 'nullable|string',
            'hasil' => 'nullable|string',
            'tindak_lanjut' => 'nullable|string',
            'bahan_alat' => 'nullable|string',
        ]);

        // $tindakan->update($request->all());

        // Temukan tindakan yang akan diperbarui
        $tindakan = Tindakan::findOrFail($id);

        // Perbarui data tindakan
        $tindakan->update($validatedData);

        return redirect()->route('tindakan.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tindakan $tindakan)
    {
        $tindakan->delete();

        return redirect()->route('tindakan.index')
                        ->with('success', 'Data Tindakan Pasien berhasil dihapus.');
    }
}

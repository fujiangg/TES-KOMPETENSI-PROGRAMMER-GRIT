<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::all();

        $loggedInUser = Auth::user();
        if ($loggedInUser && in_array($loggedInUser->role_name, [1])) {
            $users = User::all();

            return view('pegawai.index', compact('pegawai', 'users'));
        } else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $loggedInUser = Auth::user();
        if ($loggedInUser && in_array($loggedInUser->role_name, [1])) {
            $users = User::all();

            return view('pegawai.create', $users);
        }
        else {
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'nama_lengkap' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'spesialisasi' => 'nullable|string|max:255',
            'kontak' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'tanggal_bergabung' => 'nullable|date',
            'status' => 'required|boolean',
            'gaji' => 'nullable|numeric',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Data Pegawai berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        $loggedInUser = Auth::user();
        if ($loggedInUser && in_array($loggedInUser->role_name, [1])) {
            $users = User::all();

            return view('pegawai.show', compact('pegawai', 'users'));
        }
        else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        $loggedInUser = Auth::user();
        if ($loggedInUser && in_array($loggedInUser->role_name, [1])) {
            $users = User::all();

            return view('pegawai.edit', compact('pegawai', 'users'));
        }
        else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'nama_lengkap' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'spesialisasi' => 'nullable|string|max:255',
            'kontak' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'tanggal_bergabung' => 'nullable|date',
            'status' => 'required|boolean',
            'gaji' => 'nullable|numeric',
        ]);

        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Data Pegawai Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('pegawai.index')
                        ->with('success', 'Data Pegawai Berhasil Dihapus.');
    }
}

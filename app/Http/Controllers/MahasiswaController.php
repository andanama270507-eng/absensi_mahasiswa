<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::with('absensi')->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mahasiswa::create([
            'kelas_id' => $request->kelas_id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'jurusan' => $request->jurusan
        ]);

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::with('absensi')->findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $kelas = Kelas::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update([
            'kelas_id' => $request->kelas_id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'jurusan' => $request->jurusan
        ]);

        return redirect()->route('/mahasiswa')
                         ->with('success', 'Mahasiswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Mahasiswa berhasil dihapus.');
    }
}

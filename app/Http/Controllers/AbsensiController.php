<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absensi = Absensi::all();
        return view('absensi.index', compact('absensi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pertemuan_id' => 'required|exists:pertemuans,id',
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
            'status' => 'required|in:Hadir,Izin,Sakit,Alpha',
        ]);

        Absensi::create($request->all());

        return redirect()->route('absensi.index')
                         ->with('success', 'Absensi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $absensi = Absensi::findOrFail($id);
        return view('absensi.show', compact('absensi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $absensi = Absensi::findOrFail($id);
        return view('absensi.edit', compact('absensi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pertemuan_id' => 'required|exists:pertemuans,id',
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
            'status' => 'required|in:Hadir,Izin,Sakit,Alpha',
        ]);

        $absensi = Absensi::findOrFail($id);
        $absensi->update($request->all());

        return redirect()->route('absensi.index')
                         ->with('success', 'Absensi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->delete();

        return redirect()->route('absensi.index')
                         ->with('success', 'Absensi berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Mahasiswa;
use App\Models\Pertemuan;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absensis = Absensi::with([
            'mahasiswa',
            'pertemuan'
        ])->latest()->get();

        return view('absensi.index', compact('absensis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswas = Mahasiswa::orderBy('nama')->get();
        $pertemuans = Pertemuan::orderBy('tanggal')->get();

        return view('absensi.create', compact(
            'mahasiswas',
            'pertemuans'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
            'pertemuan_id' => 'required|exists:pertemuans,id',
            'status' => 'required|in:Hadir,Izin,Sakit,Alpha',
        ]);

        Absensi::create([
            'mahasiswa_id' => $request->mahasiswa_id,
            'pertemuan_id' => $request->pertemuan_id,
            'status' => $request->status,
        ]);

        return redirect()->route('absensi.index')
            ->with('success', 'Data absensi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $absensi = Absensi::with([
            'mahasiswa',
            'pertemuan'
        ])->findOrFail($id);

        return view('absensi.show', compact('absensi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $absensi = Absensi::findOrFail($id);

        $mahasiswas = Mahasiswa::orderBy('nama')->get();

        $pertemuans = Pertemuan::orderBy('tanggal')->get();

        return view('absensi.edit', compact(
            'absensi',
            'mahasiswas',
            'pertemuans'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
            'pertemuan_id' => 'required|exists:pertemuans,id',
            'status' => 'required|in:Hadir,Izin,Sakit,Alpha',
        ]);

        $absensi = Absensi::findOrFail($id);

        $absensi->update([
            'mahasiswa_id' => $request->mahasiswa_id,
            'pertemuan_id' => $request->pertemuan_id,
            'status' => $request->status,
        ]);

        return redirect()->route('absensi.index')
            ->with('success', 'Data absensi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);

        $absensi->delete();

        return redirect()->route('absensi.index')
            ->with('success', 'Data absensi berhasil dihapus.');
    }
}
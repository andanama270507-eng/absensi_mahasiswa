<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertemuan;
use App\Models\Jadwal;

class PertemuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pertemuan = Pertemuan::with('jadwal')->get();
        return view('pertemuan.index', compact('pertemuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jadwal = Jadwal::all();
        return view('pertemuan.create', compact('jadwal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jadwal_id' => 'required',
            'tanggal' => 'required|date',
            'materi' => 'required',
        ]);

        Pertemuan::create([
            'jadwal_id' => $request->jadwal_id,
            'tanggal' => $request->tanggal,
            'materi' => $request->materi,
        ]);

        return redirect()->route('pertemuan.index')
            ->with('success', 'Data pertemuan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pertemuan = Pertemuan::with('jadwal')->findOrFail($id);
        return view('pertemuan.show', compact('pertemuan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pertemuan = Pertemuan::findOrFail($id);
        $jadwal = Jadwal::all();

        return view('pertemuan.edit', compact('pertemuan', 'jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jadwal_id' => 'required',
            'tanggal' => 'required|date',
            'materi' => 'required',
        ]);

        $pertemuan = Pertemuan::findOrFail($id);

        $pertemuan->update([
            'jadwal_id' => $request->jadwal_id,
            'tanggal' => $request->tanggal,
            'materi' => $request->materi,
        ]);

        return redirect()->route('pertemuan.index')
            ->with('success', 'Data pertemuan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pertemuan = Pertemuan::findOrFail($id);
        $pertemuan->delete();

        return redirect()->route('pertemuan.index')
            ->with('success', 'Data pertemuan berhasil dihapus.');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mataKuliah = MataKuliah::all();
        return view('mata_kuliah.index', compact('mataKuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mata_kuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mata_kuliah' => 'required',
            'sks' => 'required|integer',
        ]);

        MataKuliah::create([
            'nama_mata_kuliah' => $request->nama_mata_kuliah,
            'sks' => $request->sks,
        ]);

        return redirect()->route('mata-kuliah.index')
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);
        return view('mata_kuliah.show', compact('mataKuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);
        return view('mata_kuliah.edit', compact('mataKuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_mata_kuliah' => 'required',
            'sks' => 'required|integer',
        ]);

        $mataKuliah = MataKuliah::findOrFail($id);

        $mataKuliah->update([
            'nama_mata_kuliah' => $request->nama_mata_kuliah,
            'sks' => $request->sks,
        ]);

        return redirect()->route('mata-kuliah.index')
            ->with('success', 'Data mata kuliah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);
        $mataKuliah->delete();

        return redirect()->route('mata-kuliah.index')
            ->with('success', 'Data mata kuliah berhasil dihapus.');
    }
}
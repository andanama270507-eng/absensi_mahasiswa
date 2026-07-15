<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwals = Jadwal::with(['dosen', 'kelas'])->get();
        return view('jadwal.index', compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        jadwal::create([
            'dosen_id' => $request->dosen_id,
            'mata_kuliah_id' => $request->mata_kuliah_id,
            'kelas_id' => $request->kelas_id,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

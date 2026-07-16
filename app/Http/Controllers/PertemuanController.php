<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertemuan;
use App\Models\Jadwal;

class PertemuanController extends Controller
{
    public function index()
    {
        $pertemuan = Pertemuan::with('jadwal')->get();
        return view('pertemuan.index', compact('pertemuan'));
    }

    public function create()
    {
        $jadwal = Jadwal::all();
        return view('pertemuan.create', compact('jadwal'));
    }

    public function store(Request $request)
{
    $request->validate([
        'jadwal_id'    => 'required',
        'pertemuan_ke' => 'required|integer',
        'tanggal'      => 'required|date',
        'materi'       => 'required',
    ]);

    Pertemuan::create([
        'jadwal_id'    => $request->jadwal_id,
        'pertemuan_ke' => $request->pertemuan_ke,
        'tanggal'      => $request->tanggal,
        'materi'       => $request->materi,
    ]);

    return redirect()->route('pertemuan.index')
        ->with('success', 'Data pertemuan berhasil ditambahkan.');
}

    public function show($id)
    {
        $pertemuan = Pertemuan::with('jadwal')->findOrFail($id);
        return view('pertemuan.show', compact('pertemuan'));
    }

    public function edit($id)
    {
        $pertemuan = Pertemuan::findOrFail($id);
        $jadwal = Jadwal::all();

        return view('pertemuan.edit', compact('pertemuan', 'jadwal'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'jadwal_id'    => 'required',
        'pertemuan_ke' => 'required|integer',
        'tanggal'      => 'required|date',
        'materi'       => 'required',
    ]);

    $pertemuan = Pertemuan::findOrFail($id);

    $pertemuan->update([
        'jadwal_id'    => $request->jadwal_id,
        'pertemuan_ke' => $request->pertemuan_ke,
        'tanggal'      => $request->tanggal,
        'materi'       => $request->materi,
    ]);

    return redirect()->route('pertemuan.index')
        ->with('success', 'Data pertemuan berhasil diperbarui.');
}

    public function destroy($id)
    {
        $pertemuan = Pertemuan::findOrFail($id);
        $pertemuan->delete();

        return redirect()->route('pertemuan.index')
            ->with('success', 'Data pertemuan berhasil dihapus.');
    }
}
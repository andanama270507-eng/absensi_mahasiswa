<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\MataKuliah;

class JadwalController extends Controller
{
    /**
     * Menampilkan semua data jadwal
     */
    public function index()
    {
        $jadwals = Jadwal::with([
            'dosen',
            'mataKuliah',
            'kelas'
        ])->latest()->get();

        return view('jadwal.index', compact('jadwals'));
    }

    /**
     * Form tambah jadwal
     */
    public function create()
    {
        $dosens = Dosen::orderBy('nama')->get();
        $mataKuliahs = MataKuliah::orderBy('nama')->get();
        $kelas = Kelas::orderBy('nama')->get();

        return view('jadwal.create', compact(
            'dosens',
            'mataKuliahs',
            'kelas'
        ));
    }

    /**
     * Simpan data jadwal
     */
    public function store(Request $request)
    {
        $request->validate([
            'dosen_id'        => 'required|exists:dosens,id',
            'mata_kuliah_id'  => 'required|exists:mata_kuliahs,id',
            'kelas_id'        => 'required|exists:kelas,id',
            'hari'            => 'required',
            'jam_mulai'       => 'required',
            'jam_selesai'     => 'required',
        ]);

        Jadwal::create([
            'dosen_id'        => $request->dosen_id,
            'mata_kuliah_id'  => $request->mata_kuliah_id,
            'kelas_id'        => $request->kelas_id,
            'hari'            => $request->hari,
            'jam_mulai'       => $request->jam_mulai,
            'jam_selesai'     => $request->jam_selesai,
        ]);

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal berhasil ditambahkan.');
    }

    /**
     * Detail jadwal
     */
    public function show($id)
    {
        $jadwal = Jadwal::with([
            'dosen',
            'mataKuliah',
            'kelas'
        ])->findOrFail($id);

        return view('jadwal.show', compact('jadwal'));
    }

    /**
     * Form edit jadwal
     */
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);

        $dosens = Dosen::orderBy('nama')->get();
        $mataKuliahs = MataKuliah::orderBy('nama')->get();
        $kelas = Kelas::orderBy('nama')->get();

        return view('jadwal.edit', compact(
            'jadwal',
            'dosens',
            'mataKuliahs',
            'kelas'
        ));
    }

    /**
     * Update jadwal
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'dosen_id'        => 'required|exists:dosens,id',
            'mata_kuliah_id'  => 'required|exists:mata_kuliahs,id',
            'kelas_id'        => 'required|exists:kelas,id',
            'hari'            => 'required',
            'jam_mulai'       => 'required',
            'jam_selesai'     => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id);

        $jadwal->update([
            'dosen_id'        => $request->dosen_id,
            'mata_kuliah_id'  => $request->mata_kuliah_id,
            'kelas_id'        => $request->kelas_id,
            'hari'            => $request->hari,
            'jam_mulai'       => $request->jam_mulai,
            'jam_selesai'     => $request->jam_selesai,
        ]);

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal berhasil diperbarui.');
    }

    /**
     * Hapus jadwal
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);

        $jadwal->delete();

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal berhasil dihapus.');
    }
}
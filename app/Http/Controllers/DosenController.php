<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::latest()->get();

        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
        ]);

        Dosen::create($request->all());

        return redirect()->route('dosen.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.show', compact('dosen'));
    }

    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());

        return redirect()->route('dosen.index')
            ->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Dosen::destroy($id);

        return redirect()->route('dosen.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
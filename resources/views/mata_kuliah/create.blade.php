@extends('layouts.app')

@section('title', 'Tambah Mata Kuliah')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
            <h3>Tambah Mata Kuliah</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('mata-kuliah.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Kode Mata Kuliah</label>
                    <input type="text" name="kode_mk" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Mata Kuliah</label>
                    <input type="text" name="nama_mk" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">SKS</label>
                    <input type="number" name="sks" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('mata-kuliah.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

@endsection
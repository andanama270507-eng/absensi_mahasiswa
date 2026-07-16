@extends('layouts.app')

@section('title', 'Edit Mata Kuliah')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
            <h3>Edit Mata Kuliah</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('mata-kuliah.update', $mataKuliah->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Kode Mata Kuliah</label>
                    <input type="text"
                           name="kode_mk"
                           class="form-control"
                           value="{{ old('kode_mk', $mataKuliah->kode_mk) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Mata Kuliah</label>
                    <input type="text"
                           name="nama_mk"
                           class="form-control"
                           value="{{ old('nama_mk', $mataKuliah->nama_mk) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">SKS</label>
                    <input type="number"
                           name="sks"
                           class="form-control"
                           value="{{ old('sks', $mataKuliah->sks) }}"
                           required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

                <a href="{{ route('mata-kuliah.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

@endsection
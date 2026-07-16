@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')

<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">
                Tambah Mahasiswa
            </h4>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <select name="kelas_id" class="form-control" required>
                        <option value="">-- Pilih Kelas --</option>

                        @foreach($kelas as $k)
                            <option value="{{ $k->id }}">
                                {{ $k->nama_kelas }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text"
                           name="nim"
                           class="form-control"
                           value="{{ old('nim') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text"
                           name="nama"
                           class="form-control"
                           value="{{ old('nama') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">No Telp</label>
                    <input type="text"
                           name="no_telp"
                           class="form-control"
                           value="{{ old('no_telp') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text"
                           name="jurusan"
                           class="form-control"
                           value="{{ old('jurusan') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Semester</label>
                    <input type="number"
                           name="semester"
                           class="form-control"
                           value="{{ old('semester') }}"
                           min="1"
                           max="14"
                           required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
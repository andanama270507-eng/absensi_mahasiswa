@extends('layouts.app')

@section('title', 'Tambah Absensi')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">
                <i class="fas fa-plus-circle"></i>
                Tambah Data Absensi
            </h4>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Terjadi kesalahan!</strong>

                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif

            <form action="{{ route('absensi.store') }}" method="POST">

                @csrf

                <!-- Mahasiswa -->
                <div class="mb-3">

                    <label class="form-label">Mahasiswa</label>

                    <select name="mahasiswa_id" class="form-select" required>

                        <option value="">-- Pilih Mahasiswa --</option>

                        @foreach($mahasiswas as $mahasiswa)

                            <option value="{{ $mahasiswa->id }}">
                                {{ $mahasiswa->nama }}
                            </option>

                        @endforeach

                    </select>

                </div>

                <!-- Pertemuan -->
                <div class="mb-3">

                    <label class="form-label">Pertemuan</label>

                    <select name="pertemuan_id" class="form-select" required>

                        <option value="">-- Pilih Pertemuan --</option>

                        @foreach($pertemuans as $pertemuan)

                            <option value="{{ $pertemuan->id }}">
                                {{ $pertemuan->tanggal }} - {{ $pertemuan->materi }}
                            </option>

                        @endforeach

                    </select>

                </div>

                <!-- Status -->
                <div class="mb-3">

                    <label class="form-label">Status Kehadiran</label>

                    <select name="status" class="form-select" required>

                        <option value="">-- Pilih Status --</option>

                        <option value="Hadir">Hadir</option>
                        <option value="Izin">Izin</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Alpha">Alpha</option>

                    </select>

                </div>

                <div class="d-flex justify-content-between">

                    <a href="{{ route('absensi.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i>
                        Kembali
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        Simpan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection
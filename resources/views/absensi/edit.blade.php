@extends('layouts.app')

@section('title', 'Edit Absensi')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">
                <i class="fas fa-edit"></i>
                Edit Data Absensi
            </h4>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">

                    <strong>Terjadi Kesalahan!</strong>

                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif

            <form action="{{ route('absensi.update',$absensi->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label">Mahasiswa</label>

                    <select name="mahasiswa_id" class="form-select" required>

                        @foreach($mahasiswas as $mahasiswa)

                            <option value="{{ $mahasiswa->id }}"
                                {{ $absensi->mahasiswa_id == $mahasiswa->id ? 'selected' : '' }}>

                                {{ $mahasiswa->nama }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">Pertemuan</label>

                    <select name="pertemuan_id" class="form-select" required>

                        @foreach($pertemuans as $pertemuan)

                            <option value="{{ $pertemuan->id }}"
                                {{ $absensi->pertemuan_id == $pertemuan->id ? 'selected' : '' }}>

                                {{ $pertemuan->tanggal }} - {{ $pertemuan->materi }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">Status Kehadiran</label>

                    <select name="status" class="form-select">

                        <option value="Hadir" {{ $absensi->status=='Hadir' ? 'selected' : '' }}>Hadir</option>

                        <option value="Izin" {{ $absensi->status=='Izin' ? 'selected' : '' }}>Izin</option>

                        <option value="Sakit" {{ $absensi->status=='Sakit' ? 'selected' : '' }}>Sakit</option>

                        <option value="Alpha" {{ $absensi->status=='Alpha' ? 'selected' : '' }}>Alpha</option>

                    </select>

                </div>

                <div class="d-flex justify-content-between">

                    <a href="{{ route('absensi.index') }}" class="btn btn-secondary">

                        <i class="fas fa-arrow-left"></i>
                        Kembali

                    </a>

                    <button class="btn btn-warning">

                        <i class="fas fa-save"></i>
                        Update

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection
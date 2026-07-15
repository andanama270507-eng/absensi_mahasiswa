@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container mt-4">

    <div class="text-center mb-5">

        <h1 class="fw-bold">
            Sistem Absensi Mahasiswa
        </h1>

        <p class="text-muted">
            Selamat datang di Dashboard Sistem Absensi Mahasiswa
        </p>

    </div>

    <div class="row g-4">

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <i class="fas fa-user-graduate fa-4x text-primary mb-3"></i>

                    <h4>Mahasiswa</h4>

                    <p class="text-muted">
                        Kelola data mahasiswa.
                    </p>

                    <a href="{{ route('mahasiswa.index') }}"
                       class="btn btn-primary">
                        Kelola
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <i class="fas fa-chalkboard-teacher fa-4x text-success mb-3"></i>

                    <h4>Dosen</h4>

                    <p class="text-muted">
                        Kelola data dosen.
                    </p>

                    <a href="{{ route('dosen.index') }}"
                       class="btn btn-success">
                        Kelola
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <i class="fas fa-book fa-4x text-warning mb-3"></i>

                    <h4>Mata Kuliah</h4>

                    <p class="text-muted">
                        Kelola data mata kuliah.
                    </p>

                    <a href="{{ route('mata-kuliah.index') }}"
                       class="btn btn-warning text-white">
                        Kelola
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <i class="fas fa-school fa-4x text-info mb-3"></i>

                    <h4>Kelas</h4>

                    <p class="text-muted">
                        Kelola data kelas.
                    </p>

                    <a href="{{ route('kelas.index') }}"
                       class="btn btn-info text-white">
                        Kelola
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <i class="fas fa-calendar-alt fa-4x text-secondary mb-3"></i>

                    <h4>Jadwal</h4>

                    <p class="text-muted">
                        Kelola jadwal perkuliahan.
                    </p>

                    <a href="{{ route('jadwal.index') }}"
                       class="btn btn-secondary">
                        Kelola
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <i class="fas fa-clipboard-check fa-4x text-danger mb-3"></i>

                    <h4>Absensi</h4>

                    <p class="text-muted">
                        Kelola data absensi mahasiswa.
                    </p>

                    <a href="{{ route('absensi.index') }}"
                       class="btn btn-danger">
                        Kelola
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
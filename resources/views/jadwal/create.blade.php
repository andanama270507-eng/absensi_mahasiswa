@extends('layouts.app')

@section('title', 'Tambah Jadwal')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">

                <i class="fas fa-plus-circle"></i>

                Tambah Data Jadwal

            </h4>

        </div>

        <div class="card-body">

            @if ($errors->any())

                <div class="alert alert-danger">

                    <strong>Terjadi kesalahan!</strong>

                    <ul class="mt-2 mb-0">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="{{ route('jadwal.store') }}" method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label">Dosen</label>

                    <select name="dosen_id" class="form-control" required>

                        <option value="">-- Pilih Dosen --</option>

                        @foreach($dosens as $dosen)

                            <option value="{{ $dosen->id }}">

                                {{ $dosen->nama }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">Mata Kuliah</label>

                    <select name="mata_kuliah_id" class="form-control" required>

                        <option value="">-- Pilih Mata Kuliah --</option>

                        @foreach($mata_kuliahs as $mk)

                            <option value="{{ $mk->id }}">

                                {{ $mk->nama }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">Kelas</label>

                    <select name="kelas_id" class="form-control" required>

                        <option value="">-- Pilih Kelas --</option>

                        @foreach($kelas as $kls)

                            <option value="{{ $kls->id }}">

                                {{ $kls->nama }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">Hari</label>

                    <select name="hari" class="form-control" required>

                        <option value="">-- Pilih Hari --</option>

                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>

                    </select>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">Jam Mulai</label>

                            <input type="time"
                                   name="jam_mulai"
                                   class="form-control"
                                   required>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">Jam Selesai</label>

                            <input type="time"
                                   name="jam_selesai"
                                   class="form-control"
                                   required>

                        </div>

                    </div>

                </div>

                <div class="d-flex justify-content-between">

                    <a href="{{ route('jadwal.index') }}"
                       class="btn btn-secondary">

                        <i class="fas fa-arrow-left"></i>

                        Kembali

                    </a>

                    <button type="submit"
                            class="btn btn-primary">

                        <i class="fas fa-save"></i>

                        Simpan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection
@extends('layouts.app')

@section('title','Edit Jadwal')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-warning text-dark">
            <h4>
                <i class="fas fa-edit"></i>
                Edit Jadwal
            </h4>
        </div>

        <div class="card-body">

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('jadwal.update',$jadwal->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Dosen</label>

                    <select name="dosen_id" class="form-control">

                        @foreach($dosens as $dosen)

                            <option value="{{ $dosen->id }}"
                                {{ $jadwal->dosen_id==$dosen->id ? 'selected' : '' }}>

                                {{ $dosen->nama }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label>Mata Kuliah</label>

                    <select name="mata_kuliah_id" class="form-control">

                        @foreach($mataKuliahs as $mk)

                            <option value="{{ $mk->id }}"
                                {{ $jadwal->mata_kuliah_id==$mk->id ? 'selected' : '' }}>

                                {{ $mk->nama }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label>Kelas</label>

                    <select name="kelas_id" class="form-control">

                        @foreach($kelas as $kls)

                            <option value="{{ $kls->id }}"
                                {{ $jadwal->kelas_id==$kls->id ? 'selected' : '' }}>

                                {{ $kls->nama }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label>Hari</label>

                    <input
                        type="text"
                        name="hari"
                        class="form-control"
                        value="{{ old('hari',$jadwal->hari) }}"
                    >

                </div>

                <div class="mb-3">

                    <label>Jam Mulai</label>

                    <input
                        type="time"
                        name="jam_mulai"
                        class="form-control"
                        value="{{ old('jam_mulai',$jadwal->jam_mulai) }}"
                    >

                </div>

                <div class="mb-3">

                    <label>Jam Selesai</label>

                    <input
                        type="time"
                        name="jam_selesai"
                        class="form-control"
                        value="{{ old('jam_selesai',$jadwal->jam_selesai) }}"
                    >

                </div>

                <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">

                    Kembali

                </a>

                <button class="btn btn-warning">

                    Update

                </button>

            </form>

        </div>

    </div>

</div>

@endsection
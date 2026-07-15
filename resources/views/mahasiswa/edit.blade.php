@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
            <h3>Edit Data Mahasiswa</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Kelas</label>

                    <select name="kelas_id" class="form-control">

                        @foreach($kelas as $k)

                            <option value="{{ $k->id }}"
                                {{ $mahasiswa->kelas_id == $k->id ? 'selected' : '' }}>
                                {{ $k->nama_kelas }}
                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input
                        type="text"
                        name="nim"
                        class="form-control"
                        value="{{ $mahasiswa->nim }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ $mahasiswa->nama }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ $mahasiswa->email }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">No Telp</label>
                    <input
                        type="text"
                        name="no_telp"
                        class="form-control"
                        value="{{ $mahasiswa->no_telp }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input
                        type="text"
                        name="jurusan"
                        class="form-control"
                        value="{{ $mahasiswa->jurusan }}">
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

@endsection
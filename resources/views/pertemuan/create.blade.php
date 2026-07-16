@extends('layouts.app')

@section('title','Tambah Pertemuan')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">
            <h3>Tambah Pertemuan</h3>
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

            <form action="{{ route('pertemuan.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label>Jadwal</label>
                    <select name="jadwal_id" class="form-control" required>
                        <option value="">-- Pilih Jadwal --</option>

                        @foreach($jadwal as $j)
                            <option value="{{ $j->id }}">
                                Jadwal {{ $j->id }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label>Pertemuan Ke</label>
                    <input type="number"
                           name="pertemuan_ke"
                           class="form-control"
                           min="1"
                           required>
                </div>

                <div class="mb-3">
                    <label>Tanggal</label>
                    <input type="date"
                           name="tanggal"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label>Materi</label>
                    <textarea
                        name="materi"
                        class="form-control"
                        rows="4"
                        required>{{ old('materi') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('pertemuan.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection
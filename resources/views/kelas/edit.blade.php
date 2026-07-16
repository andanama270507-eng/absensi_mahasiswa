@extends('layouts.app')

@section('title','Edit Kelas')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-warning">

            <h4>Edit Kelas</h4>

            </div>

            <div class="card-body">

            <form action="{{ route('kelas.update',$kelas->id) }}"
            method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

            <label>Nama Kelas</label>

            <input type="text"
            name="nama_kelas"
            class="form-control"
            value="{{ old('nama_kelas',$kelas->nama_kelas) }}"
            required>

            </div>

            <div class="mb-3">

            <label>Ruangan</label>

            <input type="text"
            name="ruangan"
            class="form-control"
            value="{{ old('ruangan',$kelas->ruangan) }}"
            required>

            </div>

            <a href="{{ route('kelas.index') }}"
            class="btn btn-secondary">

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
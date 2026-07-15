@extends('layouts.app')

@section('title','Tambah Mahasiswa')

@section('content')

<h3>Tambah Mahasiswa</h3>

<form action="{{ route('mahasiswa.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Kelas</label>

<select name="kelas_id" class="form-control">

@foreach($kelas as $k)

<option value="{{ $k->id }}">

{{ $k->nama_kelas }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">
<label>NIM</label>
<input type="text" name="nim" class="form-control">
</div>

<div class="mb-3">
<label>Nama</label>
<input type="text" name="nama" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label>No Telp</label>
<input type="text" name="no_telp" class="form-control">
</div>

<div class="mb-3">
<label>Jurusan</label>
<input type="text" name="jurusan" class="form-control">
</div>

<button class="btn btn-primary">
Simpan
</button>

<a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
Kembali
</a>

</form>

@endsection
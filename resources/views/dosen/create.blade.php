@extends('layouts.app')

@section('title','Tambah Dosen')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h4>Tambah Dosen</h4>

</div>

<div class="card-body">

<form action="{{ route('dosen.store') }}" method="POST">

@csrf

<div class="mb-3">

<label>NIDN</label>

<input type="text"
name="nidn"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Nama</label>

<input type="text"
name="nama"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"
class="form-control">

</div>

<div class="mb-3">

<label>No Telepon</label>

<input type="text"
name="no_telp"
class="form-control">

</div>

<a href="{{ route('dosen.index') }}"
class="btn btn-secondary">

Kembali

</a>

<button class="btn btn-primary">

Simpan

</button>

</form>

</div>

</div>

</div>

@endsection
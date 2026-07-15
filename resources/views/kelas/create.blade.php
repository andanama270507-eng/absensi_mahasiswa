@extends('layouts.app')

@section('title','Tambah Kelas')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h4>Tambah Kelas</h4>

</div>

<div class="card-body">

<form action="{{ route('kelas.store') }}" method="POST">

@csrf

<div class="mb-3">

<label>Nama Kelas</label>

<input type="text"
name="nama"
class="form-control"
required>

</div>

<a href="{{ route('kelas.index') }}"
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
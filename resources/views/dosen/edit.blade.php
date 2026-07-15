@extends('layouts.app')

@section('title','Edit Dosen')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header bg-warning">

<h4>Edit Dosen</h4>

</div>

<div class="card-body">

<form action="{{ route('dosen.update',$dosen->id) }}"
method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Nama</label>

<input type="text"
name="nama"
class="form-control"
value="{{ $dosen->nama }}"
required>

</div>

<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"
class="form-control"
value="{{ $dosen->email }}">

</div>

<div class="mb-3">

<label>No Telepon</label>

<input type="text"
name="no_telp"
class="form-control"
value="{{ $dosen->no_telp }}">

</div>

<a href="{{ route('dosen.index') }}"
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
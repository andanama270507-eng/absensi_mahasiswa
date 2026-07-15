@extends('layouts.app')

@section('title','Tambah Pertemuan')

@section('content')

<div class="container">

<div class="card">

<div class="card-header">
<h3>Tambah Pertemuan</h3>
</div>

<div class="card-body">

<form action="{{ route('pertemuan.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Jadwal</label>

<select name="jadwal_id" class="form-control">

@foreach($jadwal as $j)

<option value="{{ $j->id }}">
Jadwal {{ $j->id }}
</option>

@endforeach

</select>

</div>

<div class="mb-3">
<label>Tanggal</label>
<input type="date" name="tanggal" class="form-control">
</div>

<div class="mb-3">
<label>Materi</label>
<input type="text" name="materi" class="form-control">
</div>

<button class="btn btn-primary">
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
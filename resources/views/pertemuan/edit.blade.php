@extends('layouts.app')

@section('title','Edit Pertemuan')

@section('content')

<div class="container">

<div class="card">

<div class="card-header">
<h3>Edit Pertemuan</h3>
</div>

<div class="card-body">

<form action="{{ route('pertemuan.update',$pertemuan->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Jadwal</label>

<select name="jadwal_id" class="form-control">

@foreach($jadwal as $j)

<option value="{{ $j->id }}"
{{ $pertemuan->jadwal_id==$j->id ? 'selected' : '' }}>

Jadwal {{ $j->id }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">

<label>Tanggal</label>

<input type="date"
name="tanggal"
class="form-control"
value="{{ $pertemuan->tanggal }}">

</div>

<div class="mb-3">

<label>Materi</label>

<input type="text"
name="materi"
class="form-control"
value="{{ $pertemuan->materi }}">

</div>

<button class="btn btn-primary">
Update
</button>

<a href="{{ route('pertemuan.index') }}"
class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

</div>

@endsection
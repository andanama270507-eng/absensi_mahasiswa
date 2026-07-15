@extends('layouts.app')

@section('title','Detail Pertemuan')

@section('content')

<div class="container">

<div class="card">

<div class="card-header">
<h3>Detail Pertemuan</h3>
</div>

<div class="card-body">

<table class="table table-bordered">

<tr>

<th width="200">Jadwal</th>

<td>{{ $pertemuan->jadwal->id ?? '-' }}</td>

</tr>

<tr>

<th>Tanggal</th>

<td>{{ $pertemuan->tanggal }}</td>

</tr>

<tr>

<th>Materi</th>

<td>{{ $pertemuan->materi }}</td>

</tr>

</table>

<a href="{{ route('pertemuan.index') }}" class="btn btn-secondary">
Kembali
</a>

</div>

</div>

</div>

@endsection
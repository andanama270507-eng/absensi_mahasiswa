@extends('layouts.app')

@section('title','Detail Dosen')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header bg-info text-white">

<h4>Detail Dosen</h4>

</div>

<div class="card-body">

<table class="table table-bordered">

<tr>

<th width="200">Nama</th>

<td>{{ $dosen->nama }}</td>

</tr>

<tr>

<th>Email</th>

<td>{{ $dosen->email }}</td>

</tr>

<tr>

<th>No Telepon</th>

<td>{{ $dosen->no_telp }}</td>

</tr>

<tr>

<th>Dibuat</th>

<td>{{ $dosen->created_at }}</td>

</tr>

<tr>

<th>Diubah</th>

<td>{{ $dosen->updated_at }}</td>

</tr>

</table>

<a href="{{ route('dosen.index') }}"
class="btn btn-secondary">

Kembali

</a>

<a href="{{ route('dosen.edit',$dosen->id) }}"
class="btn btn-warning">

Edit

</a>

</div>

</div>

</div>

@endsection
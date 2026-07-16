@extends('layouts.app')

@section('title','Detail Kelas')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header bg-info text-white">

<h4>Detail Kelas</h4>

</div>

<div class="card-body">

<table class="table table-bordered">

<tr>

<th width="220">Nama Kelas</th>

<td>{{ $kelas->nama_kelas }}</td>

</tr>

<tr>

<th>Ruangan</th>

<td>{{ $kelas->ruangan }}</td>

</tr>

<tr>

<th>Dibuat</th>

<td>{{ $kelas->created_at }}</td>

</tr>

<tr>

<th>Diupdate</th>

<td>{{ $kelas->updated_at }}</td>

</tr>

</table>

<a href="{{ route('kelas.index') }}"
class="btn btn-secondary">

Kembali

</a>

<a href="{{ route('kelas.edit',$kelas->id) }}"
class="btn btn-warning">

Edit

</a>

</div>

</div>

</div>

@endsection
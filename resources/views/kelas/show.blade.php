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

<td>{{ $kls->nama }}</td>

</tr>

<tr>

<th>Dibuat</th>

<td>{{ $kls->created_at }}</td>

</tr>

<tr>

<th>Diupdate</th>

<td>{{ $kls->updated_at }}</td>

</tr>

</table>

<a href="{{ route('kelas.index') }}"
class="btn btn-secondary">

Kembali

</a>

<a href="{{ route('kelas.edit',$kls->id) }}"
class="btn btn-warning">

Edit

</a>

</div>

</div>

</div>

@endsection
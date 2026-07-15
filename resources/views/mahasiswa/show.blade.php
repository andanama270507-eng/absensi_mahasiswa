@extends('layouts.app')

@section('title','Detail Mahasiswa')

@section('content')

<div class="card">

<div class="card-header">

<h3>Detail Mahasiswa</h3>

</div>

<div class="card-body">

<p><b>NIM :</b> {{ $mahasiswa->nim }}</p>

<p><b>Nama :</b> {{ $mahasiswa->nama }}</p>

<p><b>Email :</b> {{ $mahasiswa->email }}</p>

<p><b>No Telp :</b> {{ $mahasiswa->no_telp }}</p>

<p><b>Jurusan :</b> {{ $mahasiswa->jurusan }}</p>

<p><b>Kelas :</b> {{ $mahasiswa->kelas->nama_kelas ?? '-' }}</p>

<a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
Kembali
</a>

</div>

</div>

@endsection
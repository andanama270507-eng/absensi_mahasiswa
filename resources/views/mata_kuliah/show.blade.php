@extends('layouts.app')

@section('title', 'Detail Mata Kuliah')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
            <h3>Detail Mata Kuliah</h3>
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th width="200">Kode Mata Kuliah</th>
                    <td>{{ $mataKuliah->kode_mk }}</td>
                </tr>

                <tr>
                    <th width="200">Nama Mata Kuliah</th>
                    <td>{{ $mataKuliah->nama_mk }}</td>
                </tr>

                <tr>
                    <th>SKS</th>
                    <td>{{ $mataKuliah->sks }}</td>
                </tr>

            </table>

            <a href="{{ route('mata-kuliah.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </div>
    </div>

</div>

@endsection
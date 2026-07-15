@extends('layouts.app')

@section('title','Detail Jadwal')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-info text-white">

            <h4>

                <i class="fas fa-eye"></i>

                Detail Jadwal

            </h4>

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th width="220">Dosen</th>
                    <td>{{ $jadwal->dosen->nama }}</td>
                </tr>

                <tr>
                    <th>Mata Kuliah</th>
                    <td>{{ $jadwal->mataKuliah->nama }}</td>
                </tr>

                <tr>
                    <th>Kelas</th>
                    <td>{{ $jadwal->kelas->nama }}</td>
                </tr>

                <tr>
                    <th>Hari</th>
                    <td>{{ $jadwal->hari }}</td>
                </tr>

                <tr>
                    <th>Jam</th>
                    <td>{{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</td>
                </tr>

                <tr>
                    <th>Dibuat</th>
                    <td>{{ $jadwal->created_at }}</td>
                </tr>

                <tr>
                    <th>Diupdate</th>
                    <td>{{ $jadwal->updated_at }}</td>
                </tr>

            </table>

            <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">

                <i class="fas fa-arrow-left"></i>

                Kembali

            </a>

            <a href="{{ route('jadwal.edit',$jadwal->id) }}" class="btn btn-warning">

                <i class="fas fa-edit"></i>

                Edit

            </a>

        </div>

    </div>

</div>

@endsection
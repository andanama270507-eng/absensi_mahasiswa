@extends('layouts.app')

@section('title', 'Detail Absensi')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-info text-white">
            <h4 class="mb-0">
                <i class="fas fa-eye"></i>
                Detail Data Absensi
            </h4>
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th width="220">Nama Mahasiswa</th>
                    <td>{{ $absensi->mahasiswa->nama }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $absensi->mahasiswa->email }}</td>
                </tr>

                <tr>
                    <th>No. Telepon</th>
                    <td>{{ $absensi->mahasiswa->no_telp }}</td>
                </tr>

                <tr>
                    <th>Tanggal Pertemuan</th>
                    <td>{{ $absensi->pertemuan->tanggal }}</td>
                </tr>

                <tr>
                    <th>Materi</th>
                    <td>{{ $absensi->pertemuan->materi }}</td>
                </tr>

                <tr>

                    <th>Status Kehadiran</th>

                    <td>

                        @if($absensi->status == 'Hadir')

                            <span class="badge bg-success">Hadir</span>

                        @elseif($absensi->status == 'Izin')

                            <span class="badge bg-warning text-dark">Izin</span>

                        @elseif($absensi->status == 'Sakit')

                            <span class="badge bg-info text-dark">Sakit</span>

                        @else

                            <span class="badge bg-danger">Alpha</span>

                        @endif

                    </td>

                </tr>

                <tr>
                    <th>Dibuat Pada</th>
                    <td>{{ $absensi->created_at->format('d-m-Y H:i') }}</td>
                </tr>

                <tr>
                    <th>Terakhir Diubah</th>
                    <td>{{ $absensi->updated_at->format('d-m-Y H:i') }}</td>
                </tr>

            </table>

            <div class="mt-3">

                <a href="{{ route('absensi.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>

                <a href="{{ route('absensi.edit', $absensi->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i>
                    Edit
                </a>

            </div>

        </div>

    </div>

</div>

@endsection
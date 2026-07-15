@extends('layouts.app')

@section('title', 'Data Absensi')

@section('content')

<div class="container-fluid">

    {{-- Judul --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 text-gray-800">
            <i class="fas fa-clipboard-check"></i> Data Absensi Mahasiswa
        </h1>

        <a href="{{ route('absensi.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Absensi
        </a>
    </div>

    {{-- Alert Success --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}

            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Card --}}
    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h5 class="mb-0">
                Daftar Absensi
            </h5>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr class="text-center">

                            <th width="60">No</th>

                            <th>Mahasiswa</th>

                            <th>Pertemuan</th>

                            <th>Status</th>

                            <th>Jam Absen</th>

                            <th width="180">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($absensis as $key => $absensi)

                        <tr>

                            <td class="text-center">
                                {{ $key + 1 }}
                            </td>

                            <td>

                                <strong>
                                    {{ $absensi->mahasiswa->nama }}
                                </strong>

                                <br>

                                <small class="text-muted">

                                    {{ $absensi->mahasiswa->nim }}

                                </small>

                            </td>

                            <td>

                                Pertemuan Ke -

                                {{ $absensi->pertemuan->pertemuan_ke }}

                            </td>

                            <td class="text-center">

                                @if($absensi->status=="Hadir")

                                    <span class="badge bg-success">
                                        Hadir
                                    </span>

                                @elseif($absensi->status=="Izin")

                                    <span class="badge bg-warning text-dark">
                                        Izin
                                    </span>

                                @elseif($absensi->status=="Sakit")

                                    <span class="badge bg-info">
                                        Sakit
                                    </span>

                                @else

                                    <span class="badge bg-danger">
                                        Alpha
                                    </span>

                                @endif

                            </td>

                            <td class="text-center">

                                {{ $absensi->jam_absen ?? '-' }}

                            </td>

                            <td class="text-center">

                                <a href="{{ route('absensi.show',$absensi->id) }}"
                                    class="btn btn-info btn-sm">

                                    <i class="fas fa-eye"></i>

                                </a>

                                <a href="{{ route('absensi.edit',$absensi->id) }}"
                                    class="btn btn-warning btn-sm">

                                    <i class="fas fa-edit"></i>

                                </a>

                                <form
                                    action="{{ route('absensi.destroy',$absensi->id) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">

                                        <i class="fas fa-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="6" class="text-center text-muted">

                                Data absensi belum tersedia.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection
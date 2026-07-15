@extends('layouts.app')

@section('title', 'Data Jadwal')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>
            <i class="fas fa-calendar-alt"></i>
            Data Jadwal
        </h3>

        <a href="{{ route('jadwal.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Jadwal
        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show">

            {{ session('success') }}

            <button class="btn-close" data-bs-dismiss="alert"></button>

        </div>

    @endif

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h5 class="mb-0">

                Daftar Jadwal

            </h5>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark text-center">

                        <tr>

                            <th width="60">No</th>

                            <th>Dosen</th>

                            <th>Mata Kuliah</th>

                            <th>Kelas</th>

                            <th>Hari</th>

                            <th>Jam</th>

                            <th width="180">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($jadwals as $key => $jadwal)

                        <tr>

                            <td class="text-center">

                                {{ $key+1 }}

                            </td>

                            <td>

                                {{ $jadwal->dosen->nama }}

                            </td>

                            <td>

                                {{ $jadwal->mataKuliah->nama }}

                            </td>

                            <td>

                                {{ $jadwal->kelas->nama }}

                            </td>

                            <td>

                                {{ $jadwal->hari }}

                            </td>

                            <td>

                                {{ $jadwal->jam_mulai }}

                                -

                                {{ $jadwal->jam_selesai }}

                            </td>

                            <td class="text-center">

                                <a href="{{ route('jadwal.show',$jadwal->id) }}"
                                   class="btn btn-info btn-sm">

                                    <i class="fas fa-eye"></i>

                                </a>

                                <a href="{{ route('jadwal.edit',$jadwal->id) }}"
                                   class="btn btn-warning btn-sm">

                                    <i class="fas fa-edit"></i>

                                </a>

                                <form action="{{ route('jadwal.destroy',$jadwal->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus jadwal ini?')">

                                        <i class="fas fa-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="7" class="text-center text-muted">

                                Belum ada data jadwal.

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
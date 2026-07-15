@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Mahasiswa</h3>

        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">
            + Tambah Mahasiswa
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered table-striped">

                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th width="200">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($mahasiswa as $m)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $m->nim }}</td>

                            <td>{{ $m->nama }}</td>

                            <td>{{ $m->email }}</td>

                            <td>{{ $m->no_telp }}</td>

                            <td>{{ $m->jurusan }}</td>

                            <td>{{ $m->kelas->nama_kelas ?? '-' }}</td>

                            <td>

                                <a href="{{ route('mahasiswa.show', $m->id) }}"
                                   class="btn btn-info btn-sm">
                                    Detail
                                </a>

                                <a href="{{ route('mahasiswa.edit', $m->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('mahasiswa.destroy', $m->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="8" class="text-center">
                                Belum ada data mahasiswa.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection
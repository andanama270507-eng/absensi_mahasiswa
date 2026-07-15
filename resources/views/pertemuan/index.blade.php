@extends('layouts.app')

@section('title','Data Pertemuan')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between mb-3">
        <h3>Data Pertemuan</h3>

        <a href="{{ route('pertemuan.create') }}" class="btn btn-primary">
            + Tambah Pertemuan
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
                        <th>Jadwal</th>
                        <th>Tanggal</th>
                        <th>Materi</th>
                        <th width="220">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($pertemuan as $p)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $p->jadwal->id ?? '-' }}</td>

                        <td>{{ $p->tanggal }}</td>

                        <td>{{ $p->materi }}</td>

                        <td>

                            <a href="{{ route('pertemuan.show',$p->id) }}" class="btn btn-info btn-sm">
                                Detail
                            </a>

                            <a href="{{ route('pertemuan.edit',$p->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('pertemuan.destroy',$p->id) }}" method="POST" class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data?')">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="5" class="text-center">
                            Belum ada data pertemuan.
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection
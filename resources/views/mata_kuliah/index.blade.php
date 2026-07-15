@extends('layouts.app')

@section('title', 'Data Mata Kuliah')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Mata Kuliah</h3>

        <a href="{{ route('mata-kuliah.create') }}" class="btn btn-primary">
            + Tambah Mata Kuliah
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
                        <th width="60">No</th>
                        <th>Nama Mata Kuliah</th>
                        <th width="100">SKS</th>
                        <th width="220">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($mataKuliah as $mk)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $mk->nama_mata_kuliah }}</td>

                        <td>{{ $mk->sks }}</td>

                        <td>

                            <a href="{{ route('mata-kuliah.show', $mk->id) }}"
                               class="btn btn-info btn-sm">
                                Detail
                            </a>

                            <a href="{{ route('mata-kuliah.edit', $mk->id) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('mata-kuliah.destroy', $mk->id) }}"
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
                        <td colspan="4" class="text-center">
                            Belum ada data mata kuliah.
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection
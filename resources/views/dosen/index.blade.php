@extends('layouts.app')

@section('title', 'Data Dosen')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>
            <i class="fas fa-chalkboard-teacher text-primary"></i>
            Data Dosen
        </h2>

        <a href="{{ route('dosen.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Dosen
        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show">

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h5 class="mb-0">
                Daftar Dosen
            </h5>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark text-center">

                        <tr>

                            <th width="60">No</th>

                            <th>NIDN</th>

                            <th>Nama</th>

                            <th>Email</th>

                            <th>No Telepon</th>

                            <th width="200">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($dosens as $key => $dosen)

                            <tr>

                                <td class="text-center">
                                    {{ $key + 1 }}
                                </td>

                                <td>
                                    {{ $dosen->nidn }}
                                </td>

                                <td>
                                    {{ $dosen->nama }}
                                </td>

                                <td>
                                    {{ $dosen->email }}
                                </td>

                                <td>
                                    {{ $dosen->no_telp }}
                                </td>

                                <td class="text-center">

                                    <a href="{{ route('dosen.show',$dosen->id) }}"
                                       class="btn btn-info btn-sm">

                                        <i class="fas fa-eye"></i>

                                    </a>

                                    <a href="{{ route('dosen.edit',$dosen->id) }}"
                                       class="btn btn-warning btn-sm">

                                        <i class="fas fa-edit"></i>

                                    </a>

                                    <form action="{{ route('dosen.destroy',$dosen->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus data dosen ini?')">

                                            <i class="fas fa-trash"></i>

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6" class="text-center text-muted">

                                    Belum ada data dosen.

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
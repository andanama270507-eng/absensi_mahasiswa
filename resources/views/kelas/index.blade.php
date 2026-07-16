@extends('layouts.app')

@section('title','Data Kelas')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between mb-3">

        <h3>Data Kelas</h3>

        <a href="{{ route('kelas.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Kelas
        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <div class="card shadow">

        <div class="card-body">

            <table class="table table-bordered">

                <thead class="table-dark">

                    <tr>

                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Ruangan</th>
                        <th width="220">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($kelas as $key=>$kls)

                    <tr>

                        <td>{{ $key+1 }}</td>

                        <td>{{ $kls->nama_kelas }}</td>

                        <td>{{ $kls->ruangan }}</td>

                        <td>

                            <a href="{{ route('kelas.show',$kls->id) }}" class="btn btn-info btn-sm">

                                Detail

                            </a>

                            <a href="{{ route('kelas.edit',$kls->id) }}" class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form action="{{ route('kelas.destroy',$kls->id) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus data?')">

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="3" class="text-center">

                            Belum ada data.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
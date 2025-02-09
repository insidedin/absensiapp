@extends('layouts.app')

@section('title', 'Halaman Data Karyawan')

@section('content')
    <section class="absen-section" >
        <div class="container mt-5">
            <div class="row align-items-center mb-3">
                <div class="col">
                    <h2>Data Jabatan Karyawan</h2>
                </div>
                <div class="col text-end">
                    <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Jabatan</th>
                        <th>Status</th>
                        <th>Gaji</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($karyawan as $item)
                    <tr>
                        <td>{{ $item->nama_jabatan }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ 'Rp. ' . number_format($item->gaji, 0, ',', '.') }}</td>
                        {{-- ini adalah icon edit --}}
                        <td>
                            <a href="{{ route('karyawan.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        {{-- ini adalah icon hapus --}}
                        <td>
                            <form id="deleteForm-{{ $item->id }}" action="{{ route('karyawan.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Data Karyawan belum tersedia.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
    </section>
@endsection
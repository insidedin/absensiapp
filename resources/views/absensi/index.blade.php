@extends('layouts.app')

@section('title', 'Halaman Home')

@section('content')
<section class="data-absen-section">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Data Absensi Karyawan</h2>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Nama Karyawan</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th style="width: 100px;">Edit</th>
                    <th style="width: 100px;">Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absensi as $data)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->keterangan }}</td>
                        <td>{{ $data->tanggal }}</td>
                        <td>
                            <a href="{{ route('absensi.edit', ['id' => $data->id]) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                        </td>
                        <td>
                            <form action="" id="deleteForm-{{ $data->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $data->id }})">
                                    <b class="bi bi-trash"> Hapus</b>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
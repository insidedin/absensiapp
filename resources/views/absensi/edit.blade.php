@extends('layouts.app')

@section('title', 'Halaman Edit Absensi')

@section('content')
    <section class="absen-section">
        <div class="container mt-5">
            <h2 class="text-center mb-4">Edit Absensi Karyawan</h2>
            <form action="{{ route('absensi.update', $absensi->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $absensi->nama }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="keterangan">Keterangan:</label>
                    <select class="form-select" id="keterangan" name="keterangan" required>
                        <option value="Hadir" {{ $absensi->keterangan == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                        <option value="Izin" {{ $absensi->keterangan == 'Izin' ? 'selected' : '' }}>Izin</option>
                        <option value="Cuti" {{ $absensi->keterangan == 'Cuti' ? 'selected' : '' }}>Cuti</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $absensi->tanggal }}" required>
                </div>
                <button type="submit" class="btn btn-success mt-3">Update</button>
                <a href="{{ route('absensi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
            </form>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('title', 'Halaman Absensi')

@section('content')
    <section class="absen-section">
        <div class="container mt-5">
            <h2 class="text-center mb-4">Form Absensi Karyawan</h2>
            <form action="{{ route('absensi.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group mb-3">
                    <label for="keterangan">Keterangan:</label>
                    <select class="form-select" id="keterangan" name="keterangan" required>
                        <option value="Hadir">Hadir</option>
                        <option value="Izin">Izin</option>
                        <option value="Cuti">Cuti</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </section>
@endsection
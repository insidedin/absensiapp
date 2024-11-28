@extends('layouts.app')

@section('title', 'Halaman Home')

@section('content')
    <div class="container mt-5">
        <h2>Absensi Karyawan</h2>
        <form action="/absensi" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <select class="form-select" id="keterangan" name="keterangan" required>
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Cuti">Cuti</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
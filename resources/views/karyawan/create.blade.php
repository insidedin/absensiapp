@extends('layouts.app')

@section('title', 'Halaman Tambah Data Karyawan')

@section('content')
    <section class="absen-section">
        <div class="container mt-5">
            <h2>Tambah Data Jabatan Karyawan</h2>
            <form action="{{ route ('karyawan.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nama_jabatan">Nama Jabatan</label>
                    <input type="text" class="form-control" name="nama_jabatan" required>
                </div>
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <select class="form-select" name="status" id="status">
                        <option value="Tetap">Tetap</option>
                        <option value="Kontrak">Kontrak</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="gaji">Gaji</label>
                    <input type="number" class="form-control" name="gaji" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </section>
@endsection
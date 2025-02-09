@extends('layouts.app')

@section('title', 'Halaman Edit Data Karyawan')

@section('content')
    <section class="absen-section">
        <div class="container mt-5">
            <h2>Edit Data Jabatan Karyawan</h2>
            <form action="{{ route ('karyawan.update', $karyawan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="nama_jabatan">Nama Jabatan</label>
                    <input type="text" class="form-control" name="nama_jabatan" value="{{ $karyawan->nama_jabatan }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <select class="form-select" name="status" id="status">
                        <option value="Tetap" {{ $karyawan->status == 'Tetap' ? 'selected' : '' }}>Tetap</option>
                        <option value="Kontrak" {{ $karyawan->status == 'Kontrak' ? 'selected' : '' }}>Kontrak</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="gaji">Gaji</label>
                    <input type="number" class="form-control" name="gaji" value="{{ $karyawan->gaji }}" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </section>
@endsection
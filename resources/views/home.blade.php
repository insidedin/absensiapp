@extends('layouts.app')

@section('title', 'Halaman Home')

@section('content')
    <section class="welcome-section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h1>Selamat Datang di Aplikasi Digital Absensi</h1>
                    <p>Digital Absensi yang dibangun menggunakan Framework Laravel
                        bersama kelas GSO39A dalam materi pembelajaran Web Programming.
                    </p>
                    <a href="" class="btn btn-primary">Selengkapnya &raquo;</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/Welcome-cuate.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

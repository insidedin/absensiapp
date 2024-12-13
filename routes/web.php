<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;

Route::get('/', function () {
    return view('home');
});

Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');
Route::get('/absensi/create', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.store');

// Rute untuk Edit Absensi
Route::get('/absensi/{id}/edit', [AbsensiController::class, 'edit'])->name('absensi.edit');
Route::put('/absensi/{id}', [AbsensiController::class, 'update'])->name('absensi.update');

// Rute untuk Delete Absensi
Route::delete('/absensi/{id}', [AbsensiController::class, 'destroy'])->name('absensi.destroy');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Halaman Utama
Route::get('/', [MahasiswaController::class, 'index']);

// Endpoint untuk AJAX mengambil data JSON
Route::get('/get-mahasiswa', [MahasiswaController::class, 'getData']);
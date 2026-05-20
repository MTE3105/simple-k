<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendudukController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/pejabat', [KelurahanController::class, 'profillurah']);

Route::get('/dash', [DashboardController::class, 'index']);

Route::get('/pejabat', [DashboardController::class, 'pejabat']);

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/penduduk',[PendudukController::class, 'dataPenduduk']);

Route::get('/surat', [PendudukController::class, 'daftarSurat']);




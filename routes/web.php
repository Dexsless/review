<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TabunganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('siswa', SiswaController::class);
Route::resource('tabungan', TabunganController::class);

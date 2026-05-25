<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/main',function(){
    return view('main');
});

Route::resource('/fakultas',FakultasController::class)
->parameters([
    'fakultas'=>'fakultas'
]);

Route::resource('/periode',PeriodeController::class);

Route::resource('/prodi',ProdiController::class);

Route::resource('/mahasiswa',MahasiswaController::class)
->parameters([
    'mahasiswa'=>'mahasiswa'
]);
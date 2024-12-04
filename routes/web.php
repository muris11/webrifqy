<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Login Page';
    $slug = 'dahsboard';
    return view('/dashboard',compact('title','slug'));
});

Route::get('/dashboard', function() {
    $title = 'Dashboard';
    $slug = 'dahsboard';
    return view('/dashboard',compact('title','slug'));
});

use App\Http\Controllers\mahasiswaController;
Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [mahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [mahasiswaController::class, 'store']);
Route::get('/mahasiswa/edit/{id}', [mahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{id}', [mahasiswaController::class, 'update']);
Route::get('/mahasiswa/destroy/{id}', [mahasiswaController::class, 'destroy']);

use App\Http\Controllers\prodiController;
Route::get('/prodi', [prodiController::class, 'index']);
Route::get('/prodi/create', [prodiController::class, 'create']);
Route::post('/prodi/store', [prodiController::class, 'store']);
Route::get('/prodi/edit/{id}', [prodiController::class, 'edit']);
Route::post('/prodi/update/{id}', [prodiController::class, 'update']);
Route::get('/prodi/destroy/{id}', [prodiController::class, 'destroy']);

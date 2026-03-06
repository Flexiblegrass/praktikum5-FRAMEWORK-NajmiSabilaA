<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/matkul', [MatkulController::class, 'index']);
Route::post('/matkul', [MatkulController::class, 'store']);
Route::resource('matkul', MatkulController::class);
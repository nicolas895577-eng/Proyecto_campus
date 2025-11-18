<?php

use App\Http\Controllers\EspacioController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('espacios',EspacioController::class);
Route::resource('reservas',ReservaController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::view('/mapa', 'mapa');
Route::view('/dashboard', 'dashboard');
Route::view('/info', 'info');
Route::view('/mapa', 'mapa');
Route::view('/colaboracao', 'colaboracao');
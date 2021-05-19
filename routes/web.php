<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('empleados', [EmpleadoController::class, 'index'])->name('empleados.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// Rutas de autenticación
Auth::routes(); // Esto incluye automáticamente las rutas de autenticación, incluyendo logout

// Ruta libre para todos los usuarios
Route::get('/', [HomeController::class, 'index'])->name('welcome');

// Rutas protegidas por autenticación
Route::group(['middleware' => 'auth'], function () {
    // Ruta para el home
    Route::get('/home', [NoticiaController::class, 'index'])->name('home');

    // Rutas RESTful para el recurso 'noticias'
    Route::resource('noticias', NoticiaController::class);
});

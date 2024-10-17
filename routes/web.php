<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Auth::routes(); // Esto incluye automáticamente las rutas de autenticación, incluyendo logout

Route::get('/', [HomeController::class, 'index'])->name('welcome');
// Ruta para el home
Route::get('/home', [NoticiaController::class, 'index'])->name('home');

// Rutas RESTful para el recurso 'noticias'
Route::resource('noticias', NoticiaController::class);

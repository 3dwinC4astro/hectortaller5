<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class HomeController extends Controller
{
    public function index()
{
    $noticias = Noticia::all(); // Obtener todas las noticias de la base de datos
    return view('welcome', compact('noticias')); // Pasar las noticias a la vista
}



}

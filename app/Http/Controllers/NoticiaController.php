<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    // Mostrar la lista de noticias
    public function index()
    {
        $noticias = Noticia::all();
        return view('home', compact('noticias'));
    }

    // Mostrar el formulario para crear una nueva noticia
    public function create()
    {
        return view('noticias.create');
    }

    // Guardar una nueva noticia en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required',
            'autor' => 'required|string|max:255',
            'fecha_publicacion' => 'required|date',
        ]);

        Noticia::create($request->all());
        return redirect()->route('noticias.index')->with('success', 'Noticia creada exitosamente.');
    }

    // Mostrar una noticia en particular
    public function show(Noticia $noticia)
    {
        return view('noticias.show', compact('noticia'));
    }

    // Mostrar el formulario para editar una noticia
    public function edit(Noticia $noticia)
    {
        return view('noticias.edit', compact('noticia'));
    }

    // Actualizar una noticia en la base de datos
    public function update(Request $request, Noticia $noticia)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required',
            'autor' => 'required|string|max:255',
            'fecha_publicacion' => 'required|date',
        ]);

        $noticia->update($request->all());
        return redirect()->route('noticias.index')->with('success', 'Noticia actualizada exitosamente.');
    }

    // Eliminar una noticia de la base de datos
    public function destroy(Noticia $noticia)
    {
        $noticia->delete();
        return redirect()->route('noticias.index')->with('success', 'Noticia eliminada exitosamente.');
    }
}

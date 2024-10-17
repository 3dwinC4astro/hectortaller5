@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 text-center text-primary">Lista de Noticias</h1>
    
    <div class="text-right mb-4">
        <a href="{{ route('noticias.create') }}" class="btn btn-success">Crear nueva noticia</a>
    </div>

    @if ($noticias->count())
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Autor</th>
                    <th>Fecha de Publicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($noticias as $noticia)
                    <tr>
                        <td>{{ $noticia->nombre }}</td>
                        <td>{{ Str::limit($noticia->descripcion, 50) }}</td> <!-- Limitar la descripción a 50 caracteres -->
                        <td>{{ $noticia->autor }}</td>
                        <td>{{ $noticia->fecha_publicacion }}</td>
                        <td>
                            <a href="{{ route('noticias.edit', $noticia->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('noticias.destroy', $noticia->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta noticia?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info text-center">
            <p>No hay noticias disponibles.</p>
        </div>
    @endif
</div>
@endsection

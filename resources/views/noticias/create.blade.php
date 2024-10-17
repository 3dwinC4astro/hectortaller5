@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-primary display-4 mb-5">Crear Nueva Noticia</h1>

    <form action="{{ route('noticias.store') }}" method="POST" class="bg-light p-5 shadow-sm rounded">
        @csrf
        <div class="form-group mb-4">
            <label for="nombre" class="form-label">Nombre de la Noticia:</label>
            <input type="text" name="nombre" id="nombre" class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" value="{{ old('nombre') }}">
            @if ($errors->has('nombre'))
                <div class="invalid-feedback">
                    {{ $errors->first('nombre') }}
                </div>
            @endif
        </div>

        <div class="form-group mb-4">
            <label for="descripcion" class="form-label">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" rows="4">{{ old('descripcion') }}</textarea>
            @if ($errors->has('descripcion'))
                <div class="invalid-feedback">
                    {{ $errors->first('descripcion') }}
                </div>
            @endif
        </div>

        <div class="form-group mb-4">
            <label for="autor" class="form-label">Autor:</label>
            <input type="text" name="autor" id="autor" class="form-control {{ $errors->has('autor') ? 'is-invalid' : '' }}" value="{{ old('autor') }}">
            @if ($errors->has('autor'))
                <div class="invalid-feedback">
                    {{ $errors->first('autor') }}
                </div>
            @endif
        </div>

        <div class="form-group mb-4">
            <label for="fecha_publicacion" class="form-label">Fecha de Publicación:</label>
            <input type="date" name="fecha_publicacion" id="fecha_publicacion" class="form-control {{ $errors->has('fecha_publicacion') ? 'is-invalid' : '' }}" value="{{ old('fecha_publicacion') }}">
            @if ($errors->has('fecha_publicacion'))
                <div class="invalid-feedback">
                    {{ $errors->first('fecha_publicacion') }}
                </div>
            @endif
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg px-5 py-2 shadow-sm">
                <i class="fas fa-save"></i> Crear Noticia
            </button>
        </div>
    </form>
</div>
@endsection

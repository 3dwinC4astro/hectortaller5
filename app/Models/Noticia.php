<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    // Agrega los campos que se permiten asignar en masa
    protected $fillable = [
        'nombre',
        'descripcion',
        'autor',
        'fecha_publicacion',
    ];
}

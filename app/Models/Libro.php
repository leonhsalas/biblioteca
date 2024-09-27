<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    // Aquí puedes especificar la tabla si no quieres usar el plural del nombre del modelo
    // protected $table = 'libros';

    // Especifica los campos que pueden ser asignados masivamente
    protected $fillable = ['Título', 'autor', 'genero', 'anio_publicacion'];
}
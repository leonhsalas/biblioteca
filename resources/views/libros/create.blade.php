@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Nuevo Libro</h1>
        <form action="{{ route('libros.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" class="form-control" id="autor" name="autor" required>
            </div>
            <div class="form-group">
                <label for="genero">Género:</label>
                <input type="text" class="form-control" id="genero" name="genero" required>
            </div>
            <div class="form-group">
                <label for="anio_publicacion">Año de Publicación:</label>
                <input type="number" class="form-control" id="anio_publicacion" name="anio_publicacion" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
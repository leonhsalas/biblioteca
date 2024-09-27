@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Libros</h1>
        <a href="{{ route('libros.create') }}" class="btn btn-primary">Agregar Libro</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Género</th>
                    <th>Año de Publicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->genero }}</td>
                        <td>{{ $libro->anio_publicacion }}</td>
                        <td>
                            <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                <h1 class="text">Bootstrap Funcionando</h1>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
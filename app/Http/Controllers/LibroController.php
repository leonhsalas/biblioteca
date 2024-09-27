<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller{
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(Request $request){
    
        $request->validate([
            'Título' => 'required|string|max:255',
            'Autor' => 'required|string|max:255',
            'genero' => 'required|string|max:100',
            'anio_publicacion' => 'required|integer',
        ]);
        
        Libro::create($request->all());
        return redirect()->route('libros.index')->with('success', 'Libro agregado correctamente.');
    }
    

    public function show($id){
        $libro = Libro::findOrFail($id);
        return view('libros.show', compact('libro'));
    }

    public function edit($id){
        $libro = Libro::findOrFail($id)
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'required|string|max:100',
            'anio_publicacion' => 'required|integer',
        ]);
        
        $libro = Libro::findOrFail($id);
        $libro->update($request->all());
        return redirect()->route('libros.index')->with('success', 'Libro actualizado correctamente.');
    }

    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return redirect()->route('libros.index')->with('success', 'Libro eliminado correctamente.');
    }
}
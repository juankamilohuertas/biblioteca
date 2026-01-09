<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function index()
    {
        return view("crear_libro");
    }

    public function leerLibro()
    {
        $libros = Libro::all();
        return view('crear_libro', compact('libros'));
    }

    public function crearLibro(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'author'  => 'required',
        ]);
        Libro::create([
            'nombre' => $request->nombre,
            'author' => $request->author
        ]);

        return redirect()->route('obtener.libro')
            ->with('success', 'Libro guardado correctamente');
    }

    public function editarLibro($id)
    {
        $libro = Libro::findOrFail($id);
        return view('crear_libro', compact('libro'));
    }

    public function actualizarLibro(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);

        $libro->update([
            'nombre' => $request->nombre,
            'author' => $request->author
        ]);

        return redirect()->route('crear_libro')
            ->with('success', 'Libro actualizado correctamente');
    }
}

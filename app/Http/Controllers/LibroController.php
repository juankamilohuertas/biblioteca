<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    /*  public function index()
    {
        return view("app");
    } */

    public function leerLibro()
    {
        $libros = Libro::all();
        return view('layouts/app', compact('libros'));
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

    public function actualizarIdLibro(Request $request, $id)
    {

        $idLibro = Libro::findOrFail($id);
        $idLibro->update([
            'nombre' => $request->nombre,
            'author'  => $request->author
        ]);

        return redirect()->route('obtener.libro', ['id' => $id]);
    }

    public function eliminarLibro($id)
    {
        Libro::destroy($id);
        return redirect()->route('obtener.libro', ['id' => $id]);
    }
}

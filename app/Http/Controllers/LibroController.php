<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
     public function index()
    {
        return view("layouts/app");
    }

    public function leerLibro()
    {
        $libros = Libro::all();
        return response()->json([
            'libros' => $libros
        ],201);

        /* return view('layouts/app', compact('libros')); */

    }

    public function crearLibro(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'author'  => 'required',
        ]);
        Libro::create($request->only(['nombre', 'author']));


        /* return redirect()->route('obtener.libro')
            ->with('success', 'Libro guardado correctamente'); */
        return response()->json([
            'mensaje'=> 'libro creado',
            'nombre' => $request->nombre,
            'author' => $request->author
        ], 201);
    }

    public function actualizarIdLibro(Request $request, $id)
    {

        $idLibro = Libro::findOrFail($id);
        $idLibro->update([
            'nombre' => $request->nombre,
            'author'  => $request->author,
        ]);

        return redirect()->route('obtener.libro', ['id' => $id]);
    }

    public function eliminarLibro($id)
    {
        Libro::destroy($id);
        return redirect()->route('obtener.libro', ['id' => $id]);
    }
}

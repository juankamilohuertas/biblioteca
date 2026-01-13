<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [LibroController::class, 'index']);
Route::get('/libro/crear', [LibroController::class, 'leerLibro'])->name('obtener.libro');
Route::post('/libro/crear', [LibroController::class, 'crearLibro'])->name('crear.libro');
Route::put('/libro/crear/{id}', [LibroController::class, 'actualizarIdLibro'])->name('actualizar.libro');
Route::delete('/libro/{id}', [LibroController::class, 'eliminarLibro'])->name('eliminar.libro');



// Route::post('/libro/crear', function () {
//     return view('crear_libro');
// })->name('crear');


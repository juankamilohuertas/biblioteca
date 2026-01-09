<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/libro/crear', [LibroController::class, 'leerLibro'])->name('obtener.libro');
Route::post('/libro/crear', [LibroController::class, 'crearLibro'])->name('crear.libro');

Route::get('/libro/actualizar/{id}', [LibroController::class, 'editarLibro'])
    ->name('libro.actualizar.form');

Route::put('/libro/actualizar/{id}', [LibroController::class, 'actualizarLibro'])
    ->name('libro.actualizar');


// Route::post('/libro/crear', function () {
//     return view('crear_libro');
// })->name('crear');

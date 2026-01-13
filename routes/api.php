<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::post('/data', [LibroController::class, 'crearLibro']);

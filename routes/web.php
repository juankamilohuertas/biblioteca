<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/libro/crear', function () {
    return view('panel');
})->name('crear');

Route::post('/libro/crear', function () {
    return view('panel');
})->name('crear');

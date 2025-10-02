<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('formulario');
});

Route::get('/hola', function () {
    return view('hola');
});

Route::get('/registrousuario', function () {
    return view('registrousuario');
});

Route::get('/productos', [ProductoController::class, 'index']);
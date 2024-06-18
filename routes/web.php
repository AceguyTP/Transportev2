<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('rutas', function () {
    return "Estas son las rutas disponibles";
});

Route::get('rutas/{ruta}', function ($ruta) {
    return "Esta ruta lleva a $ruta";
});
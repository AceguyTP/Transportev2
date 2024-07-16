<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\rutasController;
use GuzzleHttp\Promise\Create;

Route::get('/', HomeController::class);

Route::get('rutas', [rutasController::class, 'index']);

Route::get('rutas/informacion', [rutasController::class, 'create']);

Route::get('rutas/{ruta}', [rutasController::class, 'show']);

Route::resource('notas', NotaController::class);

Route::post('/notas', [NotaController::class, 'store'])->name('notas.store');


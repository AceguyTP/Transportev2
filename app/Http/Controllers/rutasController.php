<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rutasController extends Controller
{
    public function index() {
        return "Estas son las rutas disponibles";
    }

    public function create(){
        return "Informacion sobre los transportes y sus rutas";
    }

    public function show($ruta){
        return "Esta ruta lleva a $ruta";
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::all(); // Obtener todas las notas del usuario actual
        return view('notas.index', compact('notas'));
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|max:255',
            'contenido' => 'required',
        ]);

        // Si la validación falla, redirigir al formulario con los errores
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Crear una nueva instancia de la nota
        $nota = new Nota;

        // Asignar los datos validados a la instancia de la nota
        $nota->titulo = $request->input('titulo');
        $nota->contenido = $request->input('contenido');

        // Guardar la nota en la base de datos
        $nota->save();

        // Redirigir a la página de índice de notas con un mensaje de éxito
        return redirect()->route('notas.index')->with('success', '¡Nota creada con éxito!');
    }

    public function create()
    {
        return view('notas.create');
    }

    // ... (definir métodos para create, edit, show, update, destroy)
}

@extends('layouts.app')


@section('content')
    
    
    <h1>Mis notas</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Fecha de creación</th>
                <th>Contenido</th>
                <th>Acciones</th>
            </tr>
            <link rel="stylesheet" href="app.css">
        </thead>
        <tbody>
            @foreach ($notas as $nota)
                <tr>
                    <td>{{ $nota->titulo }}</td>
                    <td>{{ $nota->created_at->format('d/m/Y H:i') }}</td>
                    <td>{{ Str::limit($nota->contenido, 50) }}</td>
                    <td>
                        <a href="create.php">Crear</a> |
                        <a href="{{ route('notas.edit', $nota->id) }}">Editar</a> |
                        <a href="{{ route('notas.show', $nota->id) }}">Ver</a> |
                        <a href="{{ route('notas.destroy', $nota->id) }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a

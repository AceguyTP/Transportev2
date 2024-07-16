<h1>Crear nueva nota</h1>
<link rel="stylesheet" href="app.css">

<form method="POST" action="{{ route('notas.store') }}"> @csrf
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>

    <div class="form-group">
        <label for="contenido">Contenido:</label>
        <textarea class="form-control" id="contenido" name="contenido" rows="5" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Crear nota</button>
</form>

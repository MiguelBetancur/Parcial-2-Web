<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body> 
    <div class="container text-center">
        <h1>Vista de Editar</h1>
        <form action="{{route('teams.update', $team->id)}}" method="post">
            @csrf
            @method('put')
            <div class="input-group mb-3">
                <label class="input-group-text" for="name">Nombre: </label>
                <input type="text" class="form-control" id="name" name="nombre" value="{{$team->name}}">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="created_date">Fecha: </label>
                <input type="date" class="form-control" id="created_date" name="fecha_creada" value="{{$team->created_date}}">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text">Está Activo: </label>
                <input type="radio" name="esta_activo" value="True" {{ $team->is_active == 1 ? 'checked' : '' }}> SI
                <input type="radio" name="esta_activo" value="False" {{ $team->is_active == 0 ? 'checked' : '' }}> NO
            </div>
            <button type="submit" class="btn btn-primary">Actualizar equipo</button>
        </form>
    </div>
</body>
</html>


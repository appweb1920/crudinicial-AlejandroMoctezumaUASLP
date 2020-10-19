<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita Recolector</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Editando Recolector</h1>

    <div>
        <p><a href="">Recolectores</a></p>
        <p><a href="">Puntos de Reciclaje</a></p>
        <p><a href="">Detalles Recolector</a></p>
    </div>

    <form action="/editarRecolector/guardaEdicion" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$dato->id}}">
        <label for="nombre">Nombre del Recolector:</label><input type="text" name="nombre" value="{{$dato->nombre}}">
        <label for="dias">Dias del Recolector:</label><input type="text" name="dias" value="{{$dato->dias}}">
        <input type="submit">
    </form>
</body>
</html>
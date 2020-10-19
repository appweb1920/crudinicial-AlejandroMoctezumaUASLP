<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Recolector</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Creando Recolector</h1>

    <div>
        <p><a href="/muestraRecolector">Recolectores</a></p>
        <p><a href="/muestraRecoleccion">Puntos de Reciclaje</a></p>
        <p><a href="/muestraEnlaces">Detalles Recolector</a></p>
    </div>

    <form action="creaRecolector/guardaRecolector" method="POST">
        @csrf
        <label for="nombre">Nombre del Recolector:</label><input type="text" name="nombre"><br>
        <label for="dias">Dias del Recolector:</label><input type="text" name="dias"><br>
        <input type="submit">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Punto de Recoleccion</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Creando Punto</h1>

    <div>
        <p><a href="">Recolectores</a></p>
        <p><a href="">Puntos de Reciclaje</a></p>
        <p><a href="">Detalles Recolector</a></p>
    </div>

    <form action="creaRecoleccion/guardaRecoleccion" method="POST">
        @csrf
        <label for="tipo_basura">Tipo de Basura:</label><input type="text" name="tipo_basura"><br>
        <label for="direccion">Direccion:</label><input type="text" name="direccion"><br>
        <label for="apertura">Hora de Apertura:</label><input type="time" name="apertura"><br>
        <label for="cierre">Hora de Cierre:</label><input type="time" name="cierre"><br>
        <input type="submit">
    </form>
</body>
</html>
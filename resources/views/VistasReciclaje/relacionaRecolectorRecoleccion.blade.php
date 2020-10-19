<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacionar</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Relacionar Recolector con Punto de Recoleccion</h1>

    <div>
        <p><a href="/muestraRecolector">Recolectores</a></p>
        <p><a href="/muestraRecoleccion">Puntos de Reciclaje</a></p>
        <p><a href="/muestraEnlaces">Detalles Recolector</a></p>
    </div>

    @if(!is_null($recolector))
        @foreach ($recolector as $r)     
            <p>{{$r->nombre}}</p>
            @foreach ($punto as $p)     
                <a href="/enlazarRecolectorRecoleccion/{{$r->id}}/{{$p->id}}">{{$p->direccion}} | </a>
            @endforeach
            <br>
        @endforeach
    @endif
</body>
</html>
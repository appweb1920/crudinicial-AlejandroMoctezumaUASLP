<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Recolector</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Muestra Recolector</h1>

    <div>
        <p><a href="/muestraRecolector">Recolectores</a></p>
        <p><a href="/muestraRecoleccion">Puntos de Reciclaje</a></p>
        <p><a href="/muestraEnlaces">Detalles Recolector</a></p>
    </div>

    <p><a href="/creaRecolector">Nuevo Recolector</a></p>
    @if(!is_null($datos))
        @foreach ($datos as $d)     
            <p>{{$d->nombre}} | [{{$d->dias}}]</p>
            @foreach ($relaciones as $r)    
                @if ($r->id == $d->id) 
                    {{$r->direccion}} |
                @endif
            @endforeach
            <br>
            <a href="/editaRecolector/{{$d->id}}">Edita</a>
            <a href="/eliminaRecolector/{{$d->id}}">Borrar</a>
        @endforeach
    @endif
</body>
</html>
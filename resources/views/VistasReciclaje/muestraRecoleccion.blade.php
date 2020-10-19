<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Puntos de Recoleccion</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Muestra Puntos</h1>

    <div>
        <p><a href="/muestraRecolector">Recolectores</a></p>
        <p><a href="/muestraRecoleccion">Puntos de Reciclaje</a></p>
        <p><a href="/muestraEnlaces">Detalles Recolector</a></p>
    </div>

    <p><a href="/creaRecoleccion">Nuevo Punto de Recoleccion</a></p>
    @if(!is_null($datos))
        @foreach ($datos as $d)     
            <p>{{$d->tipo_basura}} | {{$d->direccion}} | [{{$d->apertura}} - {{$d->cierre}}]</p>
            @foreach ($relaciones as $r)    
                @if ($r->id == $d->id) 
                    {{$r->nombre}} |
                @endif
            @endforeach
            <br>
            <a href="/editaRecoleccion/{{$d->id}}">Edita</a>
            <a href="/eliminaRecoleccion/{{$d->id}}">Borrar</a>
        @endforeach
    @endif
</body>
</html>
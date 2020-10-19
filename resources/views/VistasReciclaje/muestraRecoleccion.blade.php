<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Puntos de Recoleccion</title>  
</head>
<body>
    <h2>Muestra Punto de Recoleccion</h2>

    <button class = "btn waves-effect waves-teal amber z-depth-1">  
        <a href="/creaRecoleccion">Nuevo Punto de Recoleccion</a>
    </button></td>

    @if(!is_null($datos))
        @foreach ($datos as $d)     
            <div class = "row">  
                <div class = "col s10 m10 l10 light-green darken-3 white-text">  
                    <p>{{$d->tipo_basura}} | {{$d->direccion}} | [{{$d->apertura}} - {{$d->cierre}}]</p>
                    @foreach ($relaciones as $r)    
                        @if ($r->id == $d->id) 
                            {{$r->nombre}} |
                        @endif
                    @endforeach
                    <br>
                    <button class = "btn waves-effect waves-teal amber z-depth-1">  
                        <a href="/editaRecoleccion/{{$d->id}}">Edita</a>
                    </button></td>  
                    <button class = "btn waves-effect waves-teal amber z-depth-1">  
                        <a href="/eliminaRecoleccion/{{$d->id}}">Borrar</a>
                    </button></td>   
                </div>  
            </div>  
        @endforeach
    @endif
</body>
</html>
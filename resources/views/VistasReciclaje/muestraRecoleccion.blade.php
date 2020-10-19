<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Puntos de Recoleccion</title>
    <link rel = "stylesheet"  href = "https://fonts.googleapis.com/icon?family=Material+Icons">  
    <link rel = "stylesheet"  href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">  
    <script type = "text/javascript"  src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>             
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>    
</head>
<body>
    <div class = "row" style = "width:100%;">  
        <div class = "col s12 m12 l12">  
            <nav>  
                <div class="nav-wrapper light-green">  
                    <a href="#" class="brand-logo right">Crudinicial</a>  
                    <ul id="nav-mobile" class="left">  
                        <li><a href="/muestraRecolector">Recolectores</a></li>  
                        <li><a href="/muestraRecoleccion">Puntos de Reciclaje</a></li>  
                        <li><a href="/muestraEnlaces">Detalles Recolector</a></li>  
                    </ul>  
                </div>  
            </nav>  
        </div>  
    </div>  

    <h2>Muestra Punto de Recoleccion</h2>

    <button class = "btn waves-effect waves-teal amber z-depth-1">  
        <a href="/creaRecoleccion">Nuevo Punto de Recoleccion</a>
    </button></td>  

    @if(!is_null($datos))
        @foreach ($datos as $d)     
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
        @endforeach
    @endif
</body>
</html>
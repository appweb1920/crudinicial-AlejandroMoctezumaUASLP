<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Recolector</title>
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

    <h2>Muestra Recolectores</h2>

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
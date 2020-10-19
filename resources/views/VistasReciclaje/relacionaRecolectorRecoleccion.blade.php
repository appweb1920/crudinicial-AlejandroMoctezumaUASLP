<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacionar</title>  
</head>
<body>
    <h2>Relaciona Recolector con Punto de Recoleccion</h2>

    @if(!is_null($recolector))
        @foreach ($recolector as $r)   
            <div class = "row">  
                <div class = "col s10 m10 l10 light-green darken-3 white-text">  
                    <p>{{$r->nombre}}</p>
                    @foreach ($punto as $p)     
                        <button class = "btn waves-effect waves-teal amber z-depth-1">  
                            <a href="/enlazarRecolectorRecoleccion/{{$r->id}}/{{$p->id}}">{{$p->direccion}}</a>
                        </button></td>  
                    @endforeach
                    <br>
                </div>  
            </div> 
        @endforeach
    @endif
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita Recolector</title> 
</head>
<body>
    <h2>Editar Recolector</h2>

    <div class = "row"> 
        <form action="/editarRecolector/guardaEdicion" method="POST" class = "col s12"> 
        @csrf
            <input type="hidden" name="id" value="{{$dato->id}}">

            <div class = "row">  
                <div class = "input-field col s6">  
                   <input type="text" name="nombre" value="{{$dato->nombre}}">
                   <label for="nombre">Nombre del Recolector:</label>
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6"> 
                   <input type="text" name="dias" value="{{$dato->dias}}">
                   <label for="dias">Dias del Recolector:</label>
                </div>  
            </div>  

            <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">cloud</i>
                </button>
            </div>
        </form>         
    </div>  
</body>
</html>
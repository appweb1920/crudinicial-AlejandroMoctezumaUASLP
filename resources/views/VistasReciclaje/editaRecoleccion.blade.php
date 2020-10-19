<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita Punto de Recoleccion</title>   
</head>
<body>
    <h2>Editar Punto de Recoleccion</h2>

    <div class = "row">  
        <form action="/editarRecoleccion/guardaEdicion" method="POST" class = "col s12">  
        @csrf
            <input type="hidden" name="id" value="{{$dato->id}}">

            <div class = "row">  
                <div class = "input-field col s6">  
                   <input type="text" name="tipo_basura" value="{{$dato->tipo_basura}}">
                   <label for="tipo_basura">Tipo de Basura:</label>
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6">  
                   <input type="text" name="direccion" value="{{$dato->direccion}}">
                   <label for="direccion">Direccion:</label>
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6">  
                   <p>Hora de Apertura:</p>
                   <input type="time" name="apertura" value="{{$dato->apertura}}">
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6">  
                   <p>Hora de Cierre:</p>
                   <input type="time" name="cierre" value="{{$dato->cierre}}">
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
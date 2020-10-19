<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Punto de Recoleccion</title>            
</head>
<body>
    <h2>Crear Punto de Recoleccion</h2>

    <div class = "row">  
        <form action="creaRecoleccion/guardaRecoleccion" method="POST" class = "col s12">  
        @csrf
            <div class = "row">  
                <div class = "input-field col s6">  
                   <input placeholder = "Tipo de Basura" type="text" name="tipo_basura">
                   <label for="tipo_basura">Tipo de Basura:</label>
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6">  
                   <input placeholder = "Mi Casa" type="text" name="direccion">
                   <label for="direccion">Direccion:</label>
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6">  
                   <p>Hora de Apertura:</p>
                   <input type="time" name="apertura">
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6">  
                   <p>Hora de Cierre:</p>
                   <input type="time" name="cierre">
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
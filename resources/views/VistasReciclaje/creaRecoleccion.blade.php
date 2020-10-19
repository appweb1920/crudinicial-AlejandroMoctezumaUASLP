<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Punto de Recoleccion</title>
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
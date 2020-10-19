@extends('layouts.app')

@section('content')
    <h2>Crear Recolector</h2>

    <div class = "row"> 
        <form action="creaRecolector/guardaRecolector" method="POST" class = "col s12"> 
        @csrf
            <div class = "row">  
                <div class = "input-field col s6">  
                <input placeholder = "Juanito Perez" type="text" name="nombre">
                <label for="nombre">Nombre del Recolector:</label>
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6"> 
                <input placeholder = "Lunes, Martes, Miercoles..." type="text" name="dias">
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
@endsection
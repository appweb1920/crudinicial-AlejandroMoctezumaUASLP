@extends('layouts.app')

@section('content')
    <h2>Muestra Punto de Recoleccion</h2>

    @if(Auth::user()->rol == 'Administrador')
        <button class = "btn waves-effect waves-teal amber z-depth-1">  
            <a href="/creaRecoleccion">Nuevo Punto de Recoleccion</a>
        </button></td>
    @endif

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
                    @if(Auth::user()->rol == 'Administrador')
                        <button class = "btn waves-effect waves-teal amber z-depth-1">  
                            <a href="/editaRecoleccion/{{$d->id}}">Edita</a>
                        </button></td>  
                        <button class = "btn waves-effect waves-teal amber z-depth-1">  
                            <a href="/eliminaRecoleccion/{{$d->id}}">Borrar</a>
                        </button></td>   
                    @endif
                </div>  
            </div>  
        @endforeach
    @endif
@endsection
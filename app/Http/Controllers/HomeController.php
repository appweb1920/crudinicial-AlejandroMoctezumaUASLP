<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\datos;
use App\Models\materias;
use App\Models\inscripcion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function Saluda()
    {
        $d = datos::all();
        return view('vistasAlgo.saluda')->with('datos',$d);
    }

    public function Despide(Request $request)
    {
        $dato = new datos;
        $dato->nombre = $request->nombre;
        $dato->apellidos = $request->apellido;
        $dato->save();
        return redirect('/hola');

        //return view('vistasAlgo.saluda')
        //->with('n',$nombre)
        //->with('a',$apellido);
    }

    public function MuestraEdicion($id)
    {
        // buscar dato
        $dato = datos::find($id);
        // pasar el dato a la vista
        return view('vistasAlgo.editaDato')->with('dato',$dato);
    }

    public function guardaEdicion(Request $request)
    {
        $dato = datos::find($request->id);
        if(!is_null($dato))
        {
            $dato->nombre = $request->nombre;
            $dato->apellidos = $request->apellido;
            $dato->save();
        }
        return redirect('/hola');
    }

    public function Borra($id)
    {
        $dato = datos::find($id);
        $dato->delete();
        return redirect('/hola');
    }

    public function MuestraMaterias($id)
    {
        // buscar datos
        $materia = materias::all();
        $inscripcion = inscripcion::all();
        // pasar el dato a la vista
        return view('vistasAlgo.muestraMaterias')
        ->with('materia',$materia)
        ->with('inscripcion',$inscripcion)
        ->with('id',$id);
    }

    public function guardaMateria(Request $request)
    {
        $materia = new materias;
        $materia->nombre_materia = $request->nombre;
        $materia->save();
        return redirect('/hola');
    }

    public function inscribirMateria($id_alumno, $id_materia)
    {
        $inscripcion = new inscripcion;
        $inscripcion->id_alumno = $id_alumno;
        $inscripcion->id_materia = $id_materia;
        $inscripcion->save();
        return redirect('/hola');
    }
}
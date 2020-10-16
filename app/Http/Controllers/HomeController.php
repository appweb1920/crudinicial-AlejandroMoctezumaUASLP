<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\recolector;
use App\Models\reciclaje;
use App\Models\detalle_recolector;

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

    public function muestraRecolector()
    {
        $d = recolector::all();
        return view('VistasReciclaje.muestraRecolector')->with('datos',$d);
    }

    public function creaRecolector()
    {
        return view('VistasReciclaje.creaRecolector');
    }

    public function guardaRecolector(Request $request)
    {
        $dato = new recolector;
        $dato->nombre = $request->nombre;
        $dato->dias = $request->dias;
        $dato->save();
        return redirect('/muestraRecolector');
    }

    public function eliminaRecolector($id)
    {
        $dato = recolector::find($id);
        $dato->delete();
        return redirect('/muestraRecolector');
    }

    public function editaRecolector($id)
    {
        $dato = recolector::find($id);
        return view('VistasReciclaje.editaRecolector')->with('dato',$dato);
    }

    public function guardaEdicionRecolector(Request $request)
    {
        $dato = recolector::find($request->id);
        if(!is_null($dato))
        {
            $dato->nombre = $request->nombre;
            $dato->dias = $request->dias;
            $dato->save();
        }
        return redirect('/muestraRecolector');
    }

    public function muestraRecoleccion()
    {
        $d = reciclaje::all();
        return view('VistasReciclaje.muestraRecoleccion')->with('datos',$d);
    }

    public function creaRecoleccion()
    {
        return view('VistasReciclaje.creaRecoleccion');
    }

    public function guardaRecoleccion(Request $request)
    {
        $dato = new reciclaje;
        $dato->tipo_basura = $request->tipo_basura;
        $dato->direccion = $request->direccion;
        $dato->apertura = $request->apertura;
        $dato->cierre = $request->cierre;
        $dato->save();
        return redirect('/muestraRecoleccion');
    }

    public function eliminaRecoleccion($id)
    {
        $dato = reciclaje::find($id);
        $dato->delete();
        return redirect('/muestraRecoleccion');
    }

    public function editaRecoleccion($id)
    {
        $dato = reciclaje::find($id);
        return view('VistasReciclaje.editaRecoleccion')->with('reciclaje',$dato);
    }

    public function guardaEdicionRecoleccion(Request $request)
    {
        $dato = reciclaje::find($request->id);
        if(!is_null($dato))
        {
            $dato->tipo_basura = $request->tipo_basura;
            $dato->direccion = $request->direccion;
            $dato->apertura = $request->apertura;
            $dato->cierre = $request->cierre;
            $dato->save();
        }
        return redirect('/muestraRecoleccion');
    }

    public function muestraEnlaces01($id)
    {
        $recolector = recolector::find($id);
        return view('VistasReciclaje.relacionaRecolectorRecoleccion')->with('reciclaje',$dato);
    }

    public function enlace01($id_recolector, $id_recoleccion)
    {
        $relacion = new detalle_recolector;
        $relacion->id_recolector = $id_recolector;
        $relacion->id_puntoreciclaje = $id_recoleccion;
        $relacion->save();
        return redirect('/muestraRecoleccion/{{$id_recolector}}');
    }
}

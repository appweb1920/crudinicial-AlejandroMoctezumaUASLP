<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
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
        $r = DB::table('recolector')
        ->join('detalle_recolector', 'detalle_recolector.id_recolector', '=', 'recolector.id')
        ->join('reciclaje', 'reciclaje.id', '=', 'detalle_recolector.id_puntoreciclaje')
        ->select(
            'recolector.id',
            'reciclaje.direccion'
        )
        ->orderBy('recolector.id','asc')
        ->orderBy('reciclaje.apertura','asc')
        ->get();
        return view('VistasReciclaje.muestraRecolector')
        ->with('datos',$d)
        ->with('relaciones',$r);
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
        $r = DB::table('reciclaje')
        ->join('detalle_recolector', 'detalle_recolector.id_puntoreciclaje', '=', 'reciclaje.id')
        ->join('recolector', 'recolector.id', '=', 'detalle_recolector.id_recolector')
        ->select(
            'reciclaje.id',
            'recolector.nombre'
        )
        ->orderBy('reciclaje.id','asc')
        ->orderBy('recolector.nombre','asc')
        ->get();
        return view('VistasReciclaje.muestraRecoleccion')
        ->with('datos',$d)
        ->with('relaciones',$r);
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
        return view('VistasReciclaje.editaRecoleccion')->with('dato',$dato);
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

    public function muestraEnlaces01()
    {
        $r = recolector::all();
        $p = reciclaje::all();
        return view('VistasReciclaje.relacionaRecolectorRecoleccion')
        ->with('recolector',$r)
        ->with('punto',$p);
    }

    public function enlace01($id_recolector, $id_recoleccion)
    {
        $result = DB::table('detalle_recolector')
        ->where('id_recolector','=',$id_recolector)
        ->where('id_puntoreciclaje','=',$id_recoleccion)
        ->get();
        if(count($result) == 0)
        {
            $relacion = new detalle_recolector;
            $relacion->id_recolector = $id_recolector;
            $relacion->id_puntoreciclaje = $id_recoleccion;
            $relacion->save();
        }
        return redirect('/muestraRecoleccion');
    }
}

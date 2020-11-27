<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\Categoria;
use App\Prestador;
use App\Pregunta;
use App\Presupuesto;

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
      $Categorias = Categoria::all();
      return view('AdminLTE.home',['Categorias'=>$Categorias]);
    }

    public function MostrarPreguntasRecibidas(){
      $id_prestador = Prestador::where( 'user_id' , Auth::user()->id )->pluck('id')->first();

      $Preguntas = Pregunta::where( 'preguntas.id_prestador' , $id_prestador )
                            ->Join( 'users' , 'preguntas.user_id' , '=' , 'users.id' )
                            ->Join( 'servicios' , 'preguntas.id_servicio' , '=' , 'servicios.id' )
                            ->select('preguntas.*','users.id as user_id', 'users.name','users.lastname','servicios.nombre as nombre_servicio')
                            ->orderBy( 'id' , 'DESC' )
                            ->take(20)
                            ->get();
      // dd($Preguntas);
      return view('AdminLTE.preguntas', ['Preguntas' => $Preguntas]);
    }

    public function AlmacenarRespuesta( Request $request ){

      $request->validate([
        'respuesta' => 'required|max:1000'
      ]);

      $Pregunta = Pregunta::findOrfail( $request->id_pregunta );
      $Pregunta->respuesta = $request->respuesta;
      $Pregunta->update();

      return redirect()->route('MostrarPreguntasRecibidas')->with( 'Respondido' , ' ' );
      
    }

    public function MostrarRespuestasRecibidas(){
      $Respuestas = Pregunta::where( 'user_id' , Auth::user()->id )
                            ->Join( 'servicios' , 'preguntas.id_servicio' , '=' , 'servicios.id' )
                            ->select('preguntas.*','servicios.nombre as nombre_servicio','servicios.id as id_servicio')
                            ->orderBy('updated_at' , 'DESC')
                            ->get();

      return view('AdminLTE.respuestas', [ 'Respuestas' => $Respuestas ]);
    }

    public function MostrarPresupuestosSolicitados(){

      $id_prestador = Prestador::where( 'user_id' , Auth::user()->id )->pluck('id')->first();
      $Presupuestos = Presupuesto::where('presupuestos.id_prestador' , $id_prestador )
                                ->where( 'monto' , null )
                                ->where( 'estado' , 'Aceptado' )
                                ->Join( 'servicios' , 'presupuestos.id_servicio' , '=' , 'servicios.id' )
                                ->select( 'presupuestos.*' ,'servicios.nombre', 'servicios.id as id_servicio' )
                                ->get();
      
      return view('AdminLTE.presupuestos_solicitados' , [ 'Presupuestos' => $Presupuestos ]);
    } 

    public function ResponderSolicitudPresupuesto( Request $request ){

      $request->validate([
        'monto' => 'required|max:10',
        'estado' => 'required'
      ]);
      
      $Presupuesto = Presupuesto::findOrfail( $request->id_presupuesto );
      
      $Presupuesto->respuesta = $request->respuesta;
      $Presupuesto->monto = $request->monto;
      $Presupuesto->estado = $request->estado;
      $Presupuesto->update();

      return redirect()->route( 'MostrarPresupuestosSolicitados' )->with( 'Exito' , ' ' );

    }
}

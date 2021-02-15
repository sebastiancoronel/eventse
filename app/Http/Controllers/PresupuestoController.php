<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Presupuesto;
use App\Prestador;
use App\Servicio;
use App\Notificacion;
use Session;
use Auth;
use Carbon\Carbon;
class PresupuestoController extends Controller
{
    public function EnviarSolicitudPresupuesto(Request $request){
        //dd( $request->session()->all() );
        //dd($request->all());
    
        // $request->validate([
        //   'desde' => 'required',
        //   'hasta' => 'required',
        //   'direccion' => 'required|max:100',
        //   'barrio' => 'required|max:100',
        //   'pregunta' => 'required'
        // ]);
        $Paquete = Session::get('Servicio');
        foreach ($Paquete as $servicio) {
          //dd($servicio['id_servicio']);
          $id_prestador = Servicio::findOrfail($servicio['id_servicio'])->id_prestador;
          
          if (  key_exists( $servicio['id_servicio'] , $request->comentario_adicional )) { //La key representa el id de servicio y el valor es el comentario adicional o pregunta que se le hace al prestador.
             $Pregunta = $request->comentario_adicional[ $servicio['id_servicio'] ];
          }else{
            return false;
          }
    
          Presupuesto::create([
            'id_servicio' => $servicio['id_servicio'],
            'id_prestador' => $id_prestador,
            'user_id' => Auth::user()->id,
            'fecha' => $request->fecha,
            'hora_desde' => $request->desde,
            'hora_hasta' => $request->hasta,
            'direccion' => $request->direccion,
            'barrio' => $request->barrio,
            //'monto' => ,
            'estado' => 'Aceptado',
            'pregunta' => $Pregunta ,
            //'respuesta' => ,
            ]
          );
          
          $User_notificar = Prestador::where( 'id' , $id_prestador )
                                      ->pluck('user_id')
                                      ->first();                             
  
          Notificacion::create([
              'user_id_notificar' => $User_notificar,
              'user_id_trigger' => Auth::user()->id,
              'id_evento' => 2, //Solicitud
              'visto' => 0,
              ]);
        }


        $request->session()->forget(['Servicio']); //Borra el carrito

        return redirect()->route('Principal')->with( 'PresupuestoEnviado' , ' ' );
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

      $User_trigger = Prestador::where( 'id' , $Presupuesto->id_prestador )
                                ->pluck('user_id')
                                ->first();                             
      Notificacion::create([
          'user_id_notificar' => $Presupuesto->user_id,
          'user_id_trigger' => $User_trigger,
          'id_evento' => 5, //Respuesta presupuesto
          'visto' => 0,
          ]);

      return redirect()->route( 'MostrarPresupuestosSolicitados' )->with( 'Exito' , ' ' );
    }

    public function MostrarRespuestasPresupuestos(){
      $Presupuestos = Presupuesto::where( 'user_id', Auth::user()->id )
                                                  // ->where('estado' , '=' , 'Aceptado')
                                                  ->Join( 'servicios' , 'presupuestos.id_servicio' , '=' , 'servicios.id' )
                                                  ->select( 'presupuestos.*' ,'servicios.nombre', 'servicios.id as id_servicio' )
                                                  ->orderBy('updated_at', 'desc')
                                                  ->get();
                                                  
      
      return view('AdminLTE.respuestas_presupuestos', [ 'Presupuestos' => $Presupuestos ] );
    }

}

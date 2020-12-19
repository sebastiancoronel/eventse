<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\Reserva;
use App\Presupuesto;
use App\Notificacion;
use App\Prestador;

class ReservaController extends Controller
{
    public function ConfirmarContratacion( Request $request ){
        $Presupuesto = Presupuesto::findOrfail( $request->id_presupuesto );
        //dd($Presupuesto->id_prestador);
        Reserva::create([
            'fecha' => $Presupuesto->fecha,
            'hora_desde' => $Presupuesto->hora_desde,
            'hora_hasta' => $Presupuesto->hora_hasta,
            'direccion' => $Presupuesto->direccion,
            'monto' => $Presupuesto->monto,
            'id_servicio' => $Presupuesto->id_servicio,
            'id_prestador' => $Presupuesto->id_prestador,
            'user_id' => $Presupuesto->user_id
            ]);
        
        $User_notificar = Prestador::where( 'id' , $Presupuesto->id_prestador )
                                ->pluck('user_id')
                                ->first();                             

        Notificacion::create([
            'user_id_notificar' => $User_notificar,
            'user_id_trigger' => $Presupuesto->user_id,
            'id_evento' => 3, //Confirmacion de prespuesto = Nueva reserva
            'visto' => 0,
            ]);
        
        $Presupuesto->delete();

        return redirect()->route('MostrarReservasCliente')->with( 'ServicioContratado' , ' ');
    }

    public function MostrarReservasCliente(){
        $Reservas = Reserva::where( 'reservas.user_id', Auth::user()->id )
                            ->Join( 'servicios' , 'reservas.id_servicio' , '=' , 'servicios.id' )
                            ->Join( 'prestadors' , 'reservas.id_prestador' , '=' , 'prestadors.id' )
                            ->select( 'reservas.*' , 'servicios.nombre' , 'servicios.id as id_servicio', 'prestadors.nombre as nombre_prestador' , 'prestadors.email' , 'prestadors.telefono' , 'prestadors.foto' )
                            ->orderBy('id', 'desc')
                            ->take(10)
                            ->get();

        return view('AdminLTE.reservas_cliente' , [ 'Reservas' => $Reservas ]);
    }
    
    public function MostrarReservasPrestador(){
        $id_prestador = Prestador::where( 'user_id' , Auth::user()->id )->pluck('id')->first();

        $Reservas = Reserva::withTrashed()        
                            ->where( 'reservas.id_prestador', $id_prestador )
                            ->Join( 'servicios' , 'reservas.id_servicio' , '=' , 'servicios.id' )
                            ->select( 'reservas.*' , 'servicios.nombre' , 'servicios.id as id_servicio' )
                            ->orderBy('fecha', 'desc')
                            ->get();
        
        return view('AdminLTE.reservas_prestador' , [ 'Reservas' => $Reservas ]);
    }

    public function MarcarComoEntregado( Request $request ){
        $Reserva = Reserva::findOrfail( $request->id_reserva );

        $Reserva->concretado = 1;
        $Reserva->update();

        return redirect()->route('MostrarReservasPrestador')->with( 'Concretado' , ' ' );
    }

    public function CancelarReserva( Request $request ){
        $Reserva = Reserva::findOrfail($request->id_reserva);
        $User_notificar = Prestador::where( 'id', $Reserva->id_prestador )->pluck('user_id')->first();
        
        Reserva::destroy($request->id_reserva);

        Notificacion::create([
            'user_id_notificar' => $User_notificar,
            'user_id_trigger' => Auth::user()->id,
            'id_evento' => 7, //Cancelar reserva
            'visto' => 0,
            ]);
        return redirect()->route('MostrarReservasCliente')->with('ReservaCancelada',' ');
    }
}

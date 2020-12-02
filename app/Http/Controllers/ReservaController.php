<?php

namespace App\Http\Controllers;

use App\Reserva;
use Illuminate\Http\Request;

use App\Presupuesto;

class ReservaController extends Controller
{
    public function ConfirmarContratacion( Request $request ){
        $Presupuesto = Presupuesto::findOrfail( $request->id_presupuesto );

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

        Notificacion::create([
            'user_id_notificar' => $Presupuesto->id_prestador,
            'user_id_trigger' => $Presupuesto->user_id,
            'id_evento' => 3, //Confirmacion de prespuesto = Nueva reserva
            'visto' => 0,
            ]);
        
        $Presupuesto->delete();

        return redirect()->route('MostrarMisReservas')->with( 'ServicioContratado' , ' ');
    }

    public function MostrarReservasCliente(){

    }
    
    public function MostrarReservasPrestador(){
        $id_prestador = Prestador::where( 'user_id' , Auth::user()->id )->pluck('id')->first();

        $Reservas = Reserva::where( 'id_prestador', $id_prestador )
                                ->orderBy('id', 'desc')
                                ->get();
        
        return view('AdminLTE.reservas_prestador' , [ 'Reservas' => $Reservas ]);
    }
}

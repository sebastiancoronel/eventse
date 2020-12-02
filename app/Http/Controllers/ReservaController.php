<?php

namespace App\Http\Controllers;

use App\Reserva;
use Illuminate\Http\Request;

use App\Presupuesto;

class ReservaController extends Controller
{
    public function ConfirmarContratacion( Request $request ){
        $Presupuesto = Presupuesto::findOrfail( $request->id_presupuesto );
        dd($Presupuesto);
    }

    public function MostrarContrataciones(){
      
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notificacion;
class NotificacionController extends Controller
{
    public function AlmacenarVisto( Request $request ){
        $Notificacion = Notificacion::findOrfail($request->id_notificacion);

        $Notificacion->visto = 1;
        $Notificacion->update();

        return;

    }

    public function MarcarComoLeidas( Request $request ){
        
        $Notificaciones = Notificacion::where( 'user_id_notificar' , $request->user_id )->where( 'visto' , 0 )->get();

        foreach ($Notificaciones as $notificacion ) {
          
          $notificacion->visto = 1;
          $notificacion->update();

        }

    }
}

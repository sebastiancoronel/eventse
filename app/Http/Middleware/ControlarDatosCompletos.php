<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Prestador;

class ControlarDatosCompletos
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      //Buscar al prestador/cliente y preguntar si tiene todos los datos completos. Si los tiene pasa sino no.
        $usuario_id = Auth::user()->id;
        $prestador = Prestador::where('user_id',$usuario_id)
                              ->select('*')
                              ->first();

        if ($prestador == null) {
          return redirect()->route('CompletarDatos');
          // if ($prestador->dni == null && $prestador->email == null && $prestador->nombre == null && $prestador->apellido == null && $prestador->telefono == null) {
          //   //code
          // }
        }
        return $next($request);
    }
}

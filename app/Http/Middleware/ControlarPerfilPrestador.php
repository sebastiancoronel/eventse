<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Prestador;

class ControlarPerfilPrestador
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
      $Prestador = Prestador::where( 'user_id', Auth::user()->id )
                            ->select('*')
                            ->first();

      if ($Prestador == null) {
        return redirect()->route('CrearPrestador');
      }
      return $next($request);
    }
}

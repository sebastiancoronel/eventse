<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Prestador;

class ControlarNegocioExistente
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
      // $usuario_id = Auth::user()->id;
      // $Prestador = Prestador::where('user_id',$usuario_id)
      //                       ->select('*')
      //                       ->first();
      // if ($Prestador == null) {
      //   return redirect()->route('Publicar');
      // }
      return $next($request);
    }
}

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
      $user = Auth::user();
      $Prestador = Prestador::where('user_id',$user->id)
                            ->select('*')
                            ->first();
      if ($Prestador == null) {
        return redirect()->route('CrearPerfilEmpresa');
      }
      return $next($request);
    }
}

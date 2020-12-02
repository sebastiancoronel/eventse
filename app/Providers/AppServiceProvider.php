<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Categoria;
use App\Notificacion;
use Session;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); //AGREGUE ESTO POR EL ERROR DE TABLA Al HACER LA MIGRACION DE LA BASE DE DATOS
        
        view()->composer('*',function(View $view){

            $Paquete = Session::get('Servicio');
            //dd($Paquete);
            if ( $Paquete != null ) {
                $CantidadServicios = count($Paquete);
            }else{
                $CantidadServicios = 0;
            }

            $view->with('Paquete',$Paquete)->with('CantidadServicios',$CantidadServicios );
        });
        
        view()->composer('*',function(View $view){
            if ( Auth::user() ) {
                $Notificaciones = Notificacion::where( 'user_id_notificar' , Auth::user()->id )
                                            ->where('visto', 0)
                                            ->Join( 'eventos' , 'notificacions.id_evento' , '=' , 'eventos.id' )
                                            ->select('notificacions.*' , 'eventos.texto', 'eventos.url_redirect')
                                            ->orderBy('id', 'desc')
                                            ->get();

            }else{
                $Notificaciones = null;
            }
            
            $view->with( 'Notificaciones', $Notificaciones );
        });

    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Categoria;
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
        
        // view()->composer('Perfiles.home',function(View $view){
        //   //Traer todas las categorias
        //   $categorias = Categoria::all();
        //   //Retornar
        //   $view->with('Categorias',$categorias);
        // });

    }
}

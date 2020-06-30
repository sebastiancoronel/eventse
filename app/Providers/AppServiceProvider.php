<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Categoria;
use App\Cliente;
use App\Carrito;
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

        // view()->composer('Perfiles.home',function(View $view){
        //   //Traer todas las categorias
        //   $categorias = Categoria::all();
        //   //Retornar
        //   $view->with('Categorias',$categorias);
        // });

        view()->composer('layouts.barra_navegacion_principal',function(View $view){
          //Traer Categorias
          $categorias = Categoria::all();

          if (Auth::user()) {
            //Traer Carrito para cliente logueado
            $user_id = Auth::user()->id;

            $Cliente = Cliente::where('user_id', $user_id)
                              ->select('*')
                              ->first();
            //dd($Cliente->id);
            $Carrito = Carrito::where('id_cliente', $Cliente->id)
                              ->select('*')
                              ->get();

          $ElementosCarrito = array();

          foreach ( $Carrito as $carrito ) {
            switch ($carrito) {
              case $carrito->id_inmueble != null:
                dd('HAY INMUEBLE');
                break;

              case $carrito->id_juego != null:
                dd('HAY Juego');
                break;
              
              case $carrito->id_animacion != null:
                dd('HAY Animacion');
                break;
              
              case $carrito->id_mobiliario != null:
                dd('HAY Mobiliario');
                break;

              case $carrito->id_catering != null:
                dd('HAY Catering');
                break;

              case $carrito->id_musicaDj != null:
                dd('HAY MusicaDj');
                break;

              default:
                # code...
                break;
            }                              
          }
                              
            dd($Carrito);
            $CantidadServicios = $Carrito->count();
            //dd($CantidadServicios);
                    
            //Retornar
             $view->with('Categorias',$categorias)->with('Cliente',$Cliente)->with('Carrito',$Carrito)->with('CantidadServicios', $CantidadServicios);
            //$view->with( compact(['Categorias',$categorias],['Cliente',$Cliente],['Carrito',$Carrito],['CantidadServicios', $CantidadServicios])); 
          }else{
            //$view->with('Categorias',$categorias);
          }


        });
    }
}

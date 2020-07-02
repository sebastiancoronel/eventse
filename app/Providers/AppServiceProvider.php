<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Categoria;
use App\Cliente;
use App\Carrito;

use App\Inmueble;
use App\Juego;
use App\Animacion;
use App\Mobiliario;
use App\Catering;
use App\MusicaDj;
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

          $ServiciosCarrito = array();

          foreach ( $Carrito as $carrito ) {
            
            switch ($carrito) {  
              case $carrito->id_inmueble != null:
                $InmuebleAgregado = Inmueble::find($carrito->id_inmueble);
                array_push( $ServiciosCarrito , $InmuebleAgregado );
                //dd($InmuebleAgregado);
                break;

              case $carrito->id_juego != null:
                $JuegoAgregado = Juego::find($carrito->id_juego);
                array_push($ServiciosCarrito , $JuegoAgregado );
                //dd($JuegoAgregado);
                break;
              
              case $carrito->id_animacion != null:
                $AnimacionAgregado = Animacion::find($carrito->id_animacion);
                array_push($ServiciosCarrito , $AnimacionAgregado );
                //dd('HAY Animacion');
                break;
              
              case $carrito->id_mobiliario != null:
                $MobiliarioAgregado = Mobiliario::find($carrito->id_mobiliario);
                array_push($ServiciosCarrito , $MobiliarioAgregado );
                //dd('HAY Mobiliario');
                break;

              case $carrito->id_catering != null:
                $CateringAgregado = Catering::find($carrito->id_catering);
                array_push($ServiciosCarrito , $CateringAgregado );
                //dd('HAY Catering');
                break;

              case $carrito->id_musicaDj != null:
                $MusicaDjAgregado = MusicaDj::find($carrito->id_musicaDj);
                array_push($ServiciosCarrito , $MusicaDjAgregado );
                //dd('HAY MusicaDj');
                break;

              default: 
              'El paquete está vacío';
                break;
            }                              
          }
          
            dd($ServiciosCarrito); //Recorrer en la vista barra_nav_princ. con un foreach para listar lo que Está en el carro.

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

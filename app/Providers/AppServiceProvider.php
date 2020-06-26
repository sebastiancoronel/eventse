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

        view()->composer('Perfiles.home',function(View $view){
          //Traer todas las categorias
          $categorias = Categoria::all();
          //Retornar
          $view->with('Categorias',$categorias);
        });

        view()->composer('layouts.barra_navegacion_principal',function(View $view){
          //Traer Categorias
          $categorias = Categoria::all();

          if (Auth::user()) {
            //Traer Carrito para cliente logueado
            $user_id = Auth::user()->id;
            $Cliente = Cliente::where('user_id', $user_id)
                              ->select('*')
                              ->first();
  
            $Carrito = Carrito::where('id_cliente', $Cliente->id_cliente)
                              ->join('inmuebles','carritos.id_inmueble','=','inmuebles.id')
                              ->join('juegos','carritos.id_juego','=','juegos.id')
                              ->join('animacions','carritos.id_animacion','=','animacions.id')
                              ->join('mobiliarios','carritos.id_mobiliario','=','mobiliarios.id')
                              ->join('caterings','carritos.id_catering','=','caterings.id')
                              ->join('musica_djs','carritos.id_musicaDj','=','musica_djs.id')
                              ->select('*')
                              ->get();
            //dd($Carrito);
            $CantidadServicios = $Carrito->count();
            //dd($CantidadServicios);
            
            
            //Retornar
            $view->with('Categorias',$categorias)->with('Carrito',$Carrito)->with('CantidadServicios', $CantidadServicios);
          }else{
            $view->with('Categorias',$categorias);
          }


        });
    }
}

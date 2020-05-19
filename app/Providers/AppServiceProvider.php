<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Categoria;

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

          //Traer Provincias y Localidades
          $path = storage_path() . "/json/ProvinciasLocalidades.json";
          $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);

          //Retornar
          $view->with('Categorias',$categorias);
        });
    }
}

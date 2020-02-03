<?php

Auth::routes();
Route::get('/', function (){
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
//Menú
Route::get('panel','PrestadorController@menu');
/*
|--------------------------------------------------------------------------
| Prestador
|--------------------------------------------------------------------------
*/
//Completar datos de cada tipo de prestador
Route::get('completardatos/prestador','PrestadorController@completar_datos');

//Almacenar datos de cuenta de INMUEBLE
Route::get('completardatos/inmueble/guardar','InmuebleController@almacenar_datos_inmueble')->name('almacenar_datos_inmueble');
//Publicaciones
Route::get('publicaciones','AlquilerController@ListarPublicados');
/*
|--------------------------------------------------------------------------
| Super Admin
|--------------------------------------------------------------------------
*/
Route::get('admin', function(){
	return view('SuperAdmin.layout');
});
//Rutas de Localidad
Route::resource('/localidad', 'LocalidadController');

//Rutas del Prestador
Route::get('prestador',function(){
  return view('Prestador.layout');
});
  //Para Inmueble
Route::resource('/inmueble','InmuebleController');

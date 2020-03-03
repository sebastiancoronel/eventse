<?php

Auth::routes();
Route::get('/', function (){
    return view('welcome');
})->name('principal');

//Rutas que necesitan autenticacion y tener completos todos los datos de contacto
Route::middleware(['auth', 'ControlarDatosCompletos'])->group(function () {

  Route::get('/home', 'HomeController@index')->name('home');
});

Route::middleware(['auth', 'ControlarDatosCompletos'])->group(function () {

  Route::get('/register/cliente', 'RegisterController@RegistrarCliente')->name('RegistrarCliente');
});

//Menú
Route::get('panel','PrestadorController@menu');
/*
|--------------------------------------------------------------------------
| Prestador
|--------------------------------------------------------------------------
*/
//Completar datos de cada tipo de prestador
Route::get('completardatos/prestador','PrestadorController@completar_datos')->name('CompletarDatos');
Route::post('completardatos/prestador/AlmacenarDatosPrestador','PrestadorController@AlmacenarDatosPrestador')->name('AlmacenarDatosPrestador');

//Almacenar datos de cuenta de INMUEBLE
Route::get('completardatos/inmueble/guardar','InmuebleController@almacenar_datos_inmueble')->name('almacenar_datos_inmueble');
//Publicaciones
Route::get('publicaciones','AlquilerController@ListarPublicados');
//Diseño base
Route::get('prestador',function(){
  return view('Prestador.layout');
});
//Para Inmueble
Route::resource('/inmueble','InmuebleController');
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
Route::post('/listarlocalidades','LocalidadController@ListarLocalidades');

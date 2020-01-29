<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//PRESTADOR------------------------------------------------------------------------------
//Completar datos de cada tipo de prestador
Route::get('/completardatos/prestador','PrestadorController@completar_datos');
// Route::get('/completardatos/prestador',function (){
//   return view('Prestador.completar_datos');
// });
//Almacenar datos de cuenta de INMUEBLE
Route::get('/completardatos/inmueble/guardar','InmuebleController@almacenar_datos_inmueble')->name('almacenar_datos_inmueble');
//---------------------------------------------------------------------------------------
Route::get('/publicaciones','AlquilerController@ListarPublicados');


//Entrar a la vista de Super Administrador
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

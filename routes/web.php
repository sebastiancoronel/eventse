<?php


/*
|--------------------------------------------------------------------------
| Zona Ecommerce
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('/', function (){
  return view('Ecommerce.welcome');
})->name('Principal');

//Traer Categorias
Route::get('/categorias-listar','CategoriaController@index');
Route::get('/articulo/detalles','ServicioController@Detalles')->name('Detalles');
Route::get('/mi-paquete','CarritoController@ProductosAgregados')->name('ProductosAgregados');

/*
|--------------------------------------------------------------------------
| Auth + Datos completos + Datos Negocio completos
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'ControlarDatosCompletos', 'ControlarNegocioExistente'])->group(function () {
  Route::get('/publicar', 'ServicioController@Publicar')->name('Publicar');
});

/*
|--------------------------------------------------------------------------
| Auth + Datos completos
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'ControlarDatosCompletos'])->group(function () {
  Route::get('/home', 'HomeController@index')->name('home');
  // Menú Cliente
  Route::get('/home/resumen','ClienteController@Resumen')->name('Resumen');
  Route::get('/home/alquileres-y-reservas/mis-alquileres','ClienteController@MisAlquileres')->name('MisAlquileres');
  Route::get('/home/servicios-contratados/favoritos','ClienteController@ServiciosFavoritos')->name('ServiciosFavoritos');
  //Menú Empresa
  Route::get('/home/empresa/alquileres-y-reservas/preguntas-recibidas','PerfilEmpresaController@PreguntasRecibidas')->name('PreguntasRecibidas');
});
/*
|--------------------------------------------------------------------------
| Solo Auth
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
 //Datos de contacto
  //Completar datos de cada tipo de prestador
  Route::get('completardatos/cliente','ClienteController@completar_datos')->name('CompletarDatos');
  //Almacena datos
Route::post('completardatos/cliente/AlmacenarDatosCliente','ClienteController@AlmacenarDatosCliente')->name('AlmacenarDatosCliente');

});
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

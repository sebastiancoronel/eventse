<?php


/*
|--------------------------------------------------------------------------
| Ecommerce
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
| Auth + Datos completos + Perfil empresa
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'ControlarDatosCompletos', 'ControlarNegocioExistente'])->group(function () {
  Route::get('/publicar', 'ServicioController@Publicar')->name('Publicar');
  Route::get('/publicar/inmuebles', 'ServicioController@PublicarInmueble')->name('PublicarInmueble');
  Route::get('/publicar/juegos', 'ServicioController@PublicarJuegos')->name('PublicarJuegos');
  Route::get('/publicar/animacion', 'ServicioController@PublicarAnimacion')->name('PublicarAnimacion');
  Route::get('/publicar/mobiliario', 'ServicioController@PublicarMobiliario')->name('PublicarMobiliario');
  Route::get('/publicar/servicios-de-catering', 'ServicioController@PublicarCatering')->name('PublicarCatering');
  Route::get('/publicar/iluminacion', 'ServicioController@PublicarIluminacion')->name('PublicarIluminacion');
  Route::get('/publicar/ornamentacion', 'ServicioController@PublicarOrnamentacion')->name('PublicarOrnamentacion');
  Route::get('/publicar/musicaDj', 'ServicioController@PublicarMusicaDj')->name('PublicarMusicaDj');
  Route::get('/publicar/shows', 'ServicioController@PublicarShows')->name('PublicarShows');
  // Planes
  Route::get('/publicar/elegir-plan', 'ServicioController@MostrarPlanes')->name('MostrarPlanes');
});

/*
|--------------------------------------------------------------------------
| Auth + Datos completos
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'ControlarDatosCompletos'])->group(function () {
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/home/resumen','ClienteController@ClienteResumen')->name('ClienteResumen');

  // Menú Cliente
    //Servicios contratados
    Route::get('/home/servicios-contratados/favoritos','ClienteController@ServiciosFavoritos')->name('ServiciosFavoritos');
    Route::get('/home/servicios-contratados/preguntas-realizadas','ClienteController@PreguntasRealizadas')->name('PreguntasRealizadas');
    Route::get('/home/servicios-contratados/servicios-finalizados','ClienteController@ServiciosFinalizados')->name('ServiciosFinalizados');
    Route::get('/home/servicios-contratados/presupuestos-recibidos','ClienteController@PresupuestosRecibidos')->name('PresupuestosRecibidos');

  //Menú Empresa
  //Alquileres y reservas
  Route::get('/home/alquileres-y-reservas/mis-alquileres','EmpresaController@MisAlquileres')->name('MisAlquileres');
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

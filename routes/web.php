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
Route::get('/reservar/servicios-publicados','ServicioController@ServiciosPublicados')->name('ServiciosPublicados');
Route::get('/mi-paquete','CarritoController@ProductosAgregados')->name('ProductosAgregados');

/*
|--------------------------------------------------------------------------
| Auth + Datos completos + Perfil empresa
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'ControlarDatosCompletos', 'ControlarNegocioExistente'])->group(function () {
  Route::get('/publicar', 'ServicioController@Publicar')->name('Publicar');
// Formularios de publicacion
  Route::get('/publicar/inmuebles', 'ServicioController@FormularioInmueble')->name('FormularioInmueble');
  Route::get('/publicar/juegos', 'ServicioController@FormularioJuegos')->name('FormularioJuegos');
  Route::get('/publicar/animacion', 'ServicioController@FormularioAnimacion')->name('FormularioAnimacion');
  Route::get('/publicar/mobiliario', 'ServicioController@FormularioMobiliario')->name('FormularioMobiliario');
  Route::get('/publicar/servicios-de-catering', 'ServicioController@FormularioCatering')->name('FormularioCatering');
  Route::get('/publicar/iluminacion', 'ServicioController@FormularioIluminacion')->name('FormularioIluminacion');
  Route::get('/publicar/ornamentacion', 'ServicioController@FormularioOrnamentacion')->name('FormularioOrnamentacion');
  Route::get('/publicar/musicaDj', 'ServicioController@FormularioMusicaDj')->name('FormularioMusicaDj');
  Route::get('/publicar/shows', 'ServicioController@FormularioShows')->name('FormularioShows');
// Publicar servicios
  // Inmuebles
  Route::post('/publicar/inmuebles/almacenando-publicacion-inmueble','ServicioController@PublicarInmueble')->name('PublicarInmueble');
  // Juegos
  Route::post('/publicar/juegos/almacenando-publicacion-juegos','ServicioController@PublicarJuegos')->name('PublicarJuegos');
  // Animaciones
  Route::post('/publicar/animacion/almacenando-publicacion-animacion','ServicioController@PublicarAnimacion')->name('PublicarAnimacion');
  // Mobiliario
  Route::post('/publicar/mobiliario/almacenando-publicacion-mobiliario','ServicioController@PublicarMobiliario')->name('PublicarMobiliario');
  // Catering
  Route::post('/publicar/servicios-de-catering/almacenando-publicacion-servicios-de-catering','ServicioController@PublicarCatering')->name('PublicarCatering');
  // Musica & Djs
  Route::post('/publicar/musicaDj/almacenando-publicacion-musicaDj','ServicioController@PublicarMusicaDj')->name('PublicarMusicaDj');
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

  // Crear Perfil Empresa
  Route::get('/publicar/crear-perfil-empresa','PrestadorController@CrearPerfilEmpresa')->name('CrearPerfilEmpresa');
  Route::get('/publicar/crear-perfil-empresa/formulario','PrestadorController@FormularioPerfilEmpresa')->name('FormularioPerfilEmpresa');
  Route::post('/publicar/crear-perfil-empresa/formulario/almacenar-perfil-empresa','PrestadorController@AlmacenarPerfilEmpresa')->name('AlmacenarPerfilEmpresa');

// Menú Cliente
  //Servicios contratados
  Route::get('/home/servicios-contratados/favoritos','ClienteController@ServiciosFavoritos')->name('ServiciosFavoritos');
  Route::get('/home/servicios-contratados/preguntas-realizadas','ClienteController@PreguntasRealizadas')->name('PreguntasRealizadas');
  Route::get('/home/servicios-contratados/servicios-finalizados','ClienteController@ServiciosFinalizados')->name('ServiciosFinalizados');
  Route::get('/home/servicios-contratados/presupuestos-recibidos','ClienteController@PresupuestosRecibidos')->name('PresupuestosRecibidos');

  //Menú Empresa
  //Alquileres y reservas
  Route::get('/home/alquileres-y-reservas/mis-alquileres','EmpresaController@MisAlquileres')->name('MisAlquileres');
  Route::get('/home/empresa/alquileres-y-reservas/preguntas-recibidas','PrestadorController@PreguntasRecibidas')->name('PreguntasRecibidas');
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

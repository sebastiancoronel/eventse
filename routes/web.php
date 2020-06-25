<?php
Auth::routes();


/*
|--------------------------------------------------------------------------
| Ecommerce
|--------------------------------------------------------------------------
*/

Route::get('/', function (){
  return view('Ecommerce.welcome');
})->name('Principal');

//Traer Categorias
Route::get('/categorias-listar','CategoriaController@index');

//Listar todos los servicios publicados
Route::get('/reservar/servicios-publicados','ServicioController@ServiciosPublicados')->name('ServiciosPublicados');
Route::get('/mi-paquete','CarritoController@ProductosAgregados')->name('ProductosAgregados');

//Articulos-Detalles
  //Inmuebles
  Route::get('/reservar/servicios-publicados/Inmueble','InmuebleController@MostrarInmueble')->name('MostrarInmueble');

  //Juegos
  //Animacion
  //Mobiliario
  //Catering
  //MusicaDjs

  //Preguntas
  Route::post('/reservar/servicios-publicados/Inmueble/almacenando-pregunta','InmuebleController@PublicarPregunta')->name('PublicarPregunta')->middleware('ControlarDatosCompletos');
  Route::get('/reservar/servicios-publicados/Inmueble/almacenando-pregunta','InmuebleController@ActualizarPreguntasAjax')->name('ActualizarPreguntasAjax')->middleware('ControlarDatosCompletos');
  
/*
|--------------------------------------------------------------------------
| Auth + Datos completos + Perfil empresa
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'ControlarDatosCompletos', 'ControlarNegocioExistente'])->group(function () {
  Route::get('/publicar', 'ServicioController@Publicar')->name('Publicar');
// Formularios de publicacion
  Route::get('/publicar/inmuebles', 'InmuebleController@FormularioInmueble')->name('FormularioInmueble');
  Route::get('/publicar/juegos', 'JuegoController@FormularioJuegos')->name('FormularioJuegos');
  Route::get('/publicar/animacion', 'AnimacionController@FormularioAnimacion')->name('FormularioAnimacion');
  Route::get('/publicar/mobiliario', 'MobiliarioController@FormularioMobiliario')->name('FormularioMobiliario');
  Route::get('/publicar/servicios-de-catering', 'CateringController@FormularioCatering')->name('FormularioCatering');
  Route::get('/publicar/iluminacion', 'IluminacionController@FormularioIluminacion')->name('FormularioIluminacion');
  Route::get('/publicar/ornamentacion', 'OrnamentacionController@FormularioOrnamentacion')->name('FormularioOrnamentacion');
  Route::get('/publicar/musicaDj', 'MusicaDjController@FormularioMusicaDj')->name('FormularioMusicaDj');
  Route::get('/publicar/shows', 'ServicioController@FormularioShows')->name('FormularioShows');
// Publicar servicios
  // Inmuebles
  Route::post('/publicar/inmuebles/almacenando-publicacion-inmueble','InmuebleController@PublicarInmueble')->name('PublicarInmueble');
  // Juegos
  Route::post('/publicar/juegos/almacenando-publicacion-juegos','JuegoController@PublicarJuegos')->name('PublicarJuegos');
  // Animaciones
  Route::post('/publicar/animacion/almacenando-publicacion-animacion','AnimacionController@PublicarAnimacion')->name('PublicarAnimacion');
  // Mobiliario
  Route::post('/publicar/mobiliario/almacenando-publicacion-mobiliario','MobiliarioController@PublicarMobiliario')->name('PublicarMobiliario');
  // Catering
  Route::post('/publicar/servicios-de-catering/almacenando-publicacion-servicios-de-catering','CateringController@PublicarCatering')->name('PublicarCatering');
  // Musica & Djs
  Route::post('/publicar/musicaDj/almacenando-publicacion-musicaDj','MusicaDjController@PublicarMusicaDj')->name('PublicarMusicaDj');
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

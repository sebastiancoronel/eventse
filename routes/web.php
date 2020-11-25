<?php

/*
|--------------------------------------------------------------------------
| Ecommerce
|--------------------------------------------------------------------------
*/
Route::get( '/' , 'CategoriaController@index' )->name('Principal');

Auth::routes();
Route::get( 'register/traer-localidades' , 'LocalidadController@TraerLocalidades' )->name('TraerLocalidades');

//Traer Categorias
Route::get('/categorias-listar','CategoriaController@index');

//Listar servicios publicados
Route::get('/reservar/servicios-publicados','ServicioController@ServiciosPublicados')->name('ServiciosPublicados');

//Mostrar servicio
Route::get('/reservar/servicios-publicados/{id}','ServicioController@MostrarServicio')->name('MostrarServicio');

//--- Preguntas
Route::post('/reservar/servicios-publicados/almacenando-pregunta','ServicioController@AlmacenarPregunta')->name('AlmacenarPregunta')->middleware('auth');
// Route::get('/reservar/servicios-publicados/almacenando-pregunta','ServicioController@ActualizarPreguntasAjax')->name('ActualizarPreguntasAjax')->middleware('auth');  

/*
|--------------------------------------------------------------------------
| Auth + Perfil prestador
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'ControlarPerfilPrestador'])->group(function () {
  // Seleccionar categoria para publicar
  Route::get('/publicar', 'ServicioController@Publicar')->name('Publicar');

  // Crear Servicios
  Route::get('/publicar/servicio/crear', 'ServicioController@CrearServicio')->name('CrearServicio');

  // Publicar servicios
  Route::post('/publicar/servicio/almacenando','ServicioController@AlmacenarServicio')->name('AlmacenarServicio');
  Route::get('/publicar/servicio/publicado-con-exito','ServicioController@ServicioPublicadoConExito')->name('ServicioPublicadoConExito');

  Route::get('/home/preguntas-recibidas','HomeController@MostrarPreguntasRecibidas')->name('MostrarPreguntasRecibidas');

  Route::post('/home/preguntas-recibidas/almacenando-respuesta','HomeController@AlmacenarRespuesta')->name('AlmacenarRespuesta');
});

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', ])->group(function () {
  //Completar datos de cada tipo de prestador
  Route::get('completardatos/cliente','PrestadorController@CrearPrestador')->name('CrearPrestador');
  //Almacenar prestador
  Route::post('completardatos/cliente/AlmacenarDatosCliente','PrestadorController@AlmacenarPrestador')->name('AlmacenarPrestador');

  //Mostrar paquete
  Route::get('/reservar/mi-paquete','ServicioController@MostrarPaquete')->name('MostrarPaquete');

  //Agregar al paquete
  Route::post('/reservar/servicios-publicados/agregando-al-paquete','ServicioController@AgregarAlPaquete')->name('AgregarAlPaquete');

  //Eliminar del paquete
  Route::post('/reservar/servicios-publicados/eliminando-del-paquete','ServicioController@EliminarDelPaquete')->name('EliminarDelPaquete');

  //Enviar solicitud de presupuesto
  Route::post('/reservar/servicios-publicados/enviando-solicitud-presupuesto','ServicioController@EnviarSolicitudPresupuesto')->name('EnviarSolicitudPresupuesto');


  // ADMIN LTE
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
  Route::get('/home/empresa/alquileres-y-reservas/preguntas-recibidas','PrestadorController@PreguntasRecibidas')->name('PreguntasRecibidas');
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/
Route::get('admin', function(){
  return view('admin');
});

Route::middleware(['auth'])->group(function () {
  
  //Categorias
  Route::get('/home/categorias/crear', 'CategoriaController@CrearCategorias')->name('CrearCategorias');
  Route::post('/home/categorias/almacenar', 'CategoriaController@AlmacenarCategoria')->name('AlmacenarCategoria');
  Route::get('/home/categorias/editar', 'CategoriaController@EditarCategoria')->name('EditarCategoria');
  Route::post('/home/categorias/actualizar', 'CategoriaController@ActualizarCategoria')->name('ActualizarCategoria');
  Route::post('/home/categorias/habilitar-deshabilitar', 'CategoriaController@EliminarCategoria')->name('EliminarCategoria');
  
  //Caracteristicas
  Route::get('/home/caracteristicas', 'CaracteristicaController@CrearCaracteristicas')->name('CrearCaracteristicas');
  Route::post('/home/caracteristicas/almacenar', 'CaracteristicaController@AlmacenarCaracteristica')->name('AlmacenarCaracteristica');
  Route::get('/home/caracteristicas/editar', 'CaracteristicaController@EditarCaracteristica')->name('EditarCaracteristica');
  Route::post('/home/caracteristicas/actualizar', 'CaracteristicaController@ActualizarCaracteristica')->name('ActualizarCaracteristica');
  Route::post('/home/caracteristicas/habilitar-deshabilitar', 'CaracteristicaController@HabilitarDeshabilitarCaracteristica')->name('HabilitarDeshabilitarCaracteristica');
  
});
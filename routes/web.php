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

//Mostrar servicios por categoria
Route::get('/categoria/{id}','CategoriaController@ServiciosPorCategoria')->name('ServiciosPorCategoria');

//--- Preguntas
Route::post('/reservar/servicios-publicados/almacenando-pregunta','ServicioController@AlmacenarPregunta')->name('AlmacenarPregunta')->middleware('auth');
// Route::get('/reservar/servicios-publicados/almacenando-pregunta','ServicioController@ActualizarPreguntasAjax')->name('ActualizarPreguntasAjax')->middleware('auth');  

// Busqueda
Route::get('/busqueda','ServicioController@ResultadosBusqueda')->name('ResultadosBusqueda');

// Filtrar resultados
Route::get('/busqueda/filtrado','ServicioController@FiltrarResultados')->name('FiltrarResultados');

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

  // Preguntas
  Route::get('/home/preguntas-recibidas','HomeController@MostrarPreguntasRecibidas')->name('MostrarPreguntasRecibidas');
  Route::post('/home/preguntas-recibidas/almacenando-respuesta','HomeController@AlmacenarRespuesta')->name('AlmacenarRespuesta');

  // Presupuestos
  Route::get('/home/presupuestos-recibidos','HomeController@MostrarPresupuestosSolicitados')->name('MostrarPresupuestosSolicitados');
  Route::post('/home/presupuestos-recibidos','PresupuestoController@ResponderSolicitudPresupuesto')->name('ResponderSolicitudPresupuesto');
  Route::get('/home/prestador/reservas','ReservaController@MostrarReservasPrestador')->name('MostrarReservasPrestador');

  // Servicios
  Route::get('/home/servicios','HomeController@MostrarMisServicios')->name('MostrarMisServicios');
  Route::post('/home/servicios/habilitar-deshabilitar','HomeController@HabilitarDeshabilitarServicio')->name('HabilitarDeshabilitarServicio');
  Route::get('/home/servicios/editar/{id}','HomeController@EditarServicio')->name('EditarServicio');
  Route::post('/home/servicios/actualizando-servicio','HomeController@ModificarServicio')->name('ModificarServicio');

  //Reservas
  Route::post('/home/reservas/reserva-concretada','ReservaController@MarcarComoEntregado')->name('MarcarComoEntregado');
});

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
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
  Route::post('/reservar/servicios-publicados/enviando-solicitud-presupuesto','PresupuestoController@EnviarSolicitudPresupuesto')->name('EnviarSolicitudPresupuesto');

  //Almacenar visto en notificacion
  Route::post('/notificacion/visto','NotificacionController@AlmacenarVisto')->name('AlmacenarVisto');

  // ADMIN LTE
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/home/resumen','ClienteController@ClienteResumen')->name('ClienteResumen');

  Route::get('/home/respuestas-recibidas','HomeController@MostrarRespuestasRecibidas')->name('MostrarRespuestasRecibidas');

  Route::get('/home/presupuestos-contestados','PresupuestoController@MostrarRespuestasPresupuestos')->name('MostrarRespuestasPresupuestos');
  Route::post('/home/presupuestos-contestados/confirmar','ReservaController@ConfirmarContratacion')->name('ConfirmarContratacion');
  Route::get('/home/cliente/reservas','ReservaController@MostrarReservasCliente')->name('MostrarReservasCliente');
  Route::post('/home/cliente/reservas/cancelar','ReservaController@CancelarReserva')->name('CancelarReserva');
  //Agregar opinion
  Route::post('/home/cliente/reservas/agregando-opinion','ReservaController@AgregarOpinion')->name('AgregarOpinion');

  // Modificar datos personales
  Route::get('/home/modificar-datos','HomeController@CreateModificarDatos')->name('CreateModificarDatos');
  Route::post('/home/modificar-datos/actualizar','HomeController@ActualizarDatosPersonales')->name('ActualizarDatosPersonales');

});

/*
|--------------------------------------------------------------------------
| Administrador
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
  Route::get('/home/caracteristicas/{id}', 'CaracteristicaController@CrearCaracteristicas')->name('CrearCaracteristicas');
  Route::post('/home/caracteristicas/almacenar', 'CaracteristicaController@AlmacenarCaracteristica')->name('AlmacenarCaracteristica');
  Route::get('/home/caracteristicas/editar/{id}', 'CaracteristicaController@EditarCaracteristica')->name('EditarCaracteristica');
  Route::post('/home/caracteristicas/actualizar', 'CaracteristicaController@ActualizarCaracteristica')->name('ActualizarCaracteristica');
  Route::post('/home/caracteristicas/habilitar-deshabilitar', 'CaracteristicaController@HabilitarDeshabilitarCaracteristica')->name('HabilitarDeshabilitarCaracteristica');
  
});
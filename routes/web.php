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
Route::get('/busqueda/traer-caracteristicas','CaracteristicaController@TraerCaracteristicas')->name('TraerCaracteristicas');

Route::get('/busqueda','ServicioController@ResultadosBusqueda')->name('ResultadosBusqueda');

// Filtrar resultados ( Buscador avanzado )
Route::get('/busqueda/filtrado','ServicioController@FiltrarResultados')->name('FiltrarResultados');

// Buscador de servicios publicados ( Vista Reservar )
Route::get('/busqueda/publicados','ServicioController@BuscadorPublicados')->name('BuscadorPublicados');

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

  // Route::post('/home/prestador/reservas/limpiar-reservas-canceladas','ReservaController@LimpiarReservasCanceladas')->name('LimpiarReservasCanceladas');

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

  //Notificaciones
  Route::post('/notificacion/visto','NotificacionController@AlmacenarVisto')->name('AlmacenarVisto');
  Route::post('/notificacion/marcar-como-leidas','NotificacionController@MarcarComoLeidas')->name('MarcarComoLeidas');

  // ADMIN LTE
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/home/resumen','ClienteController@ClienteResumen')->name('ClienteResumen');

  Route::get('/home/respuestas-recibidas','HomeController@MostrarRespuestasRecibidas')->name('MostrarRespuestasRecibidas');

  Route::get('/home/presupuestos-contestados','PresupuestoController@MostrarRespuestasPresupuestos')->name('MostrarRespuestasPresupuestos');
  Route::post('/home/presupuestos-contestados/confirmar','ReservaController@ConfirmarContratacion')->name('ConfirmarContratacion');
  Route::post('/home/presupuestos-contestados/no-entregado','ReservaController@ReservaNoEntregada')->name('ReservaNoEntregada');
  
  Route::post('/home/presupuestos-contestados/rechazar','ReservaController@RechazarRespuestaPresupuesto')->name('RechazarRespuestaPresupuesto');

  Route::post('/home/presupuestos-contestados/limpiar-presup-no-disp','PresupuestoController@LimpiarPresupNoDisp')->name('LimpiarPresupNoDisp');

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

  // Moderaciones
  Route::get('/home/moderar', 'ServicioController@ListarServiciosModerar')->name('ListarServiciosModerar');
  Route::get('/home/moderar/ver-servicio-sin-moderar', 'ServicioController@MostrarNoModeradoModal')->name('MostrarNoModeradoModal');
  Route::post('/home/moderar/aprobar-servicio', 'ServicioController@AprobarServicio')->name('AprobarServicio');
  Route::post('/home/moderar/rechazar-servicio', 'ServicioController@RechazarServicio')->name('RechazarServicio');
  
});
<?php
Auth::routes();


/*
|--------------------------------------------------------------------------
| Ecommerce
|--------------------------------------------------------------------------
*/

// Route::get('/', function (){
//   return view('Ecommerce.welcome');
// })->name('Principal');

Route::get( '/' , 'CategoriaController@index' )->name('Principal');
//Traer Categorias
Route::get('/categorias-listar','CategoriaController@index');

//Listar todos los servicios publicados
Route::get('/reservar/servicios-publicados','ServicioController@ServiciosPublicados')->name('ServiciosPublicados');

//--- Carrito --//

  //Inmueble carrito
  Route::post('/mi-paquete/agregando-inmueble','InmuebleController@AgregarAlCarrito')->name('AgregarAlCarrito')->middleware('ControlarDatosCompletos');

  // --Preguntas --//

  //--- Preguntas inmueble
  Route::post('/reservar/servicios-publicados/Inmueble/almacenando-pregunta','InmuebleController@PublicarPregunta')->name('PublicarPregunta')->middleware('ControlarDatosCompletos');
  Route::get('/reservar/servicios-publicados/Inmueble/almacenando-pregunta','InmuebleController@ActualizarPreguntasAjax')->name('ActualizarPreguntasAjax')->middleware('ControlarDatosCompletos');

//Articulos-Detalles
  
  Route::get('/reservar/servicios-publicados/Inmueble','InmuebleController@MostrarInmueble')->name('MostrarInmueble');
/*
|--------------------------------------------------------------------------
| Auth + Datos completos + Perfil empresa
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'ControlarDatosCompletos', 'ControlarNegocioExistente'])->group(function () {
  Route::get('/publicar', 'ServicioController@Publicar')->name('Publicar');
  // Formularios de publicacion
  Route::get('/publicar/inmuebles', 'InmuebleController@FormularioInmueble')->name('FormularioInmueble');

  // Publicar servicios
  // Inmuebles
  Route::post('/publicar/inmuebles/almacenando-publicacion-inmueble','InmuebleController@PublicarInmueble')->name('PublicarInmueble');
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
  Route::get('/home/empresa/alquileres-y-reservas/preguntas-recibidas','PrestadorController@PreguntasRecibidas')->name('PreguntasRecibidas');
});

/*
|--------------------------------------------------------------------------
| Auth
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
| Admin
|--------------------------------------------------------------------------
*/
Route::get('admin', function(){
  return view('admin');
});
//Categorias
Route::get('/home/categorias/crear', 'CategoriaController@CrearCategorias')->name('CrearCategorias');
Route::post('/home/categorias/almacenar', 'CategoriaController@AlmacenarCategoria')->name('AlmacenarCategoria');
Route::post('/home/categorias/modificar', 'CategoriaController@ModificarCategoria')->name('ModificarCategoria');
Route::post('/home/categorias/eliminar', 'CategoriaController@EliminarCategoria')->name('EliminarCategoria');

//Caracteristicas
Route::get('/home/caracteristicas', 'CaracteristicaController@CrearCaracteristicas')->name('CrearCaracteristicas');

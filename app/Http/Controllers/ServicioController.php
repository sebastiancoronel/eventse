<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Session;
use App\Caracteristica_por_categoria;
use App\CaracteristicasPorServicio;
use App\Caracteristica;
use App\Prestador;
use App\Servicio;
use App\Categoria;
use App\Opinion;
use App\Pregunta;
use App\Presupuesto;
use App\Notificacion;
use App\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicioController extends Controller
{
  public function Publicar(){
    $Categorias = Categoria::all();
    return view('Principal.publicar' , [ 'Categorias' => $Categorias ]);
  }

  public function ServiciosPublicados(){
    $Categorias = Categoria::all();

    $Servicios = Servicio::where( 'servicios.deleted_at' , null )
                          ->Join( 'categorias' , 'servicios.id_categoria' , '=' , 'categorias.id' )
                          ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
                          ->Join( 'users' , 'prestadors.user_id' , '=' , 'users.id' )
                          ->where( 'moderado' , 1 )
                          ->where( 'aprobado' , 1 )
                          ->select('servicios.*','categorias.nombre as nombre_categoria','users.provincia', 'users.localidad')
                          ->get();
    
    return view('Principal.servicios_publicados',['Categorias'=>$Categorias, 'Servicios' => $Servicios ]);
  }

  public function CrearServicio(Request $request){
    
    //Array de clases para variar el fondo del titulo con diferentes gradientes
    $ClasesDeFondoEnGradiente = array("purple-gradient", "blue-gradient", "aqua-gradient", "peach-gradient", "young-passion-gradient", "lady-lips-gradient","morpheus-den-gradient");
    $RandomKey = array_rand( $ClasesDeFondoEnGradiente, 1 );
    $ClaseRandom = $ClasesDeFondoEnGradiente[$RandomKey];
    
    $Categoria = Categoria::findOrfail($request->id_categoria);

    $Caracteristicas = Caracteristica_por_categoria::where( 'id_categoria' , $request->id_categoria )
                                                  ->Join( 'caracteristicas' , 'caracteristica_por_categorias.id_caracteristica' , '=' , 'caracteristicas.id' )
                                                  ->where( 'caracteristicas.deleted_at', null )
                                                  ->select('caracteristicas.*')
                                                  ->get();
    return view('Principal.crear_servicio' , [ 'Caracteristicas' => $Caracteristicas, 'Categoria' => $Categoria, 'ClaseRandom' => $ClaseRandom ] );
  }

  public function MostrarServicio($id){

    $Servicio = Servicio::findOrfail($id);
    $Prestador = Prestador::where('id', $Servicio->id_prestador)
                          ->select('*')
                          ->first();

    $NombreCategoria = Categoria::where( 'id' , $Servicio->id_categoria)->pluck('nombre')->first();

    $Opiniones = Opinion::where('id_servicio', $Servicio->id)
                        ->where('id_prestador', $Prestador->id)
                        ->Join( 'users' , 'opinions.user_id' , '=' , 'users.id' )
                        ->select('users.id as user_id', 'users.name','users.lastname', 'opinions.*')
                        ->get();

    $CantidadOpiniones = Opinion::where('id_servicio', $Servicio->id)
                                  ->where('id_prestador', $Prestador->id)
                                  ->count();

    $Preguntas = Pregunta::where('id_servicio', $Servicio->id)
                        ->where('id_prestador', $Prestador->id)
                        ->Join( 'users' , 'preguntas.user_id' , '=' , 'users.id' )
                        ->select('users.id as user_id', 'users.name','users.lastname', 'preguntas.*')
                        ->get();                          
                        
    // Traer todas las caracteristicas e indicar las que posee el servicio
    $Caracteristicas = Caracteristica_por_categoria::where( 'id_categoria' , $Servicio->id_categoria )
                                  ->Join( 'caracteristicas' , 'caracteristica_por_categorias.id_caracteristica' , '=' , 'caracteristicas.id' )
                                  ->select('caracteristicas.*')
                                  ->get();

    $CaracteristicasPorServicio = CaracteristicasPorServicio::where( 'id_servicio' , $Servicio->id )
                                  ->select('*')
                                  ->get();
  
    $CaracteristicasDelServicio = array();

    foreach ( $Caracteristicas as $caracteristica ) {
      if ( $CaracteristicasPorServicio->contains( 'id_caracteristica' , $caracteristica->id ) ) {
        array_push( $CaracteristicasDelServicio , [ $caracteristica->nombre => 'SI' ] );
      }else{
        array_push( $CaracteristicasDelServicio , [ $caracteristica->nombre => 'NO' ] );
      }
    }

    $Ubicacion = Servicio::where( 'servicios.id' , $id )
                          ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
                          ->Join( 'users' , 'prestadors.user_id' , '=' , 'users.id' )
                          ->select('users.provincia', 'users.localidad')
                          ->first();
    
    if ( Auth::user() ) {
      $User_id = Auth::user()->id;
      return view('Principal.mostrar_servicio', ['Servicio' => $Servicio, 'Prestador' => $Prestador, 'User_id' => $User_id, 'Opiniones' => $Opiniones, 
                                              'Preguntas' => $Preguntas, 'CaracteristicasDelServicio' => $CaracteristicasDelServicio, 
                                              'NombreCategoria' => $NombreCategoria, 'CantidadOpiniones' => $CantidadOpiniones, 'Ubicacion' => $Ubicacion ]);
    }   

    return view('Principal.mostrar_servicio', ['Servicio' => $Servicio, 'Prestador' => $Prestador, 'Opiniones' => $Opiniones, 
                                              'Preguntas' => $Preguntas, 'CaracteristicasDelServicio' => $CaracteristicasDelServicio, 
                                              'NombreCategoria' => $NombreCategoria, 'CantidadOpiniones' => $CantidadOpiniones, 'Ubicacion' => $Ubicacion ]);
  }

  public function AlmacenarServicio( Request $request ){

    $request->validate([      
      'nombre' => 'required|max:200',
      'descripcion' => 'required|max:2000',
      'foto_1' => 'required',
      'foto_2' => 'required',
      'foto_3' => 'required',
      'foto_4' => 'required'
    ]);

    $Prestador = Prestador::where('user_id', Auth::user()->id)
                          ->select('*')
                          ->first();
    
    $Servicio = new Servicio;
    $Servicio->nombre = $request->nombre;
    $Servicio->descripcion = $request->descripcion;
    

    if ( $request->hasFile('foto_2') ) {
      $random_string_1 = Str::random(20);
      $Foto = $request->file('foto_1');
      $NombreImagen = $random_string_1 . '.' . $Foto->getClientOriginalExtension();
      $RutaImagen = public_path('images/servicios');
      $Foto->move($RutaImagen, $NombreImagen);
      $Servicio->foto_1 = 'images/servicios/' . $NombreImagen;
    }
    if ( $request->hasFile('foto_2') ) {
      $random_string_2 = Str::random(20);
      $random_string = Str::random(20);
      $Foto = $request->file('foto_2');
      $NombreImagen = $random_string_2 . '.' . $Foto->getClientOriginalExtension();
      $RutaImagen = public_path('images/servicios');
      $Foto->move($RutaImagen, $NombreImagen);
      $Servicio->foto_2 = 'images/servicios/' . $NombreImagen;
    }

    if ( $request->hasFile('foto_3') ) {
      $random_string_3 = Str::random(20);
      $Foto = $request->file('foto_3');
      $NombreImagen = $random_string_3 . '.' . $Foto->getClientOriginalExtension();
      $RutaImagen = public_path('images/servicios');
      $Foto->move($RutaImagen, $NombreImagen);
      $Servicio->foto_3 = 'images/servicios/' . $NombreImagen;
    }

    if ( $request->hasFile('foto_4') ) {
      $random_string_4 = Str::random(20);
      $Foto = $request->file('foto_4');
      $NombreImagen = $random_string_4 . '.' . $Foto->getClientOriginalExtension();
      $RutaImagen = public_path('images/servicios');
      $Foto->move($RutaImagen, $NombreImagen);
      $Servicio->foto_4 = 'images/servicios/' . $NombreImagen;
    }

    $Servicio->precio = $request->precio;
    
    if ( $request->precio_a_convenir == 1 ) {
      $Servicio->precio_a_convenir = 1;
    }else{
      $request->validate([
        'precio' => 'required|integer|max:99999999'
      ]);
    }

    $Servicio->id_categoria = $request->id_categoria;
    $Servicio->id_prestador = $Prestador->id;
    $Servicio->moderado = 0;
    $Servicio->aprobado = 0;
    $Servicio->save();

    if ($request->caracteristica) {
      foreach ( $request->caracteristica as $caracteristica ) {
        $CaracteristicasPorServicio = new CaracteristicasPorServicio;
        $CaracteristicasPorServicio->id_servicio = $Servicio->id;
        $CaracteristicasPorServicio->id_caracteristica = $caracteristica;
        $CaracteristicasPorServicio->save();
      }
    }

    //Array de clases para variar el fondo del titulo con diferentes gradientes
    $ClasesDeFondoEnGradiente = array("purple-gradient", "blue-gradient", "aqua-gradient", "peach-gradient", "young-passion-gradient", "lady-lips-gradient","morpheus-den-gradient");
    $RandomKey = array_rand( $ClasesDeFondoEnGradiente, 1 );
    $ClaseRandom = $ClasesDeFondoEnGradiente[$RandomKey];

    return redirect()->route('ServicioPublicadoConExito')->with('Success','Servicio creado con éxito. Te avisaremos cuando sea aprobada por el administrador')->with('ClaseRandom',$ClaseRandom);
  }

  public function ServicioPublicadoConExito(){
    return view('Principal.servicio_publicado_exitosamente');
  }

  public function AlmacenarPregunta(Request $request){

    $Prestador = Servicio::where( 'servicios.id' , $request->id_servicio )
    ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
    ->where('prestadors.user_id', Auth::user()->id )->first();

    
    if ( $Prestador ) {
      return ( ['servicio_propio' => 'NoPuedesPreguntarte']);
    }

    if ( Auth::user()->rol == 'Administrador' ) {

      return ( ['error' => 'AgregarPaqueteDenegado']);

    }

    $Pregunta = New Pregunta;
    $Pregunta->id_prestador = $request->id_prestador;
    $Pregunta->id_servicio = $request->id_servicio;
    $Pregunta->user_id = $request->id_usuario;
    $Pregunta->pregunta = $request->pregunta;
    $Pregunta->save();

    $ActualizarPreguntas = Pregunta::where('id_prestador',$request->id_prestador)
                                              ->where('id_servicio',$request->id_servicio)
                                              ->select('*')
                                              ->orderBy('created_at', 'DESC')
                                              ->get();

    $User_notificar = Prestador::where( 'id' , $request->id_prestador )
                                ->pluck('user_id')
                                ->first();                                            
    Notificacion::create([
      'user_id_notificar' => $User_notificar,
      'user_id_trigger' => $request->id_usuario,
      'id_evento' => 1, //Pregunta
      'visto' => 0,
      ]);

    return $ActualizarPreguntas;
  }

  public function MostrarPaquete(){

    $Paquete = Session::get('Servicio'); //Ver si puedo usar esto o esta tomando la variable $Paquete de AppServiceProvider
    //dd($Paquete);

    $Servicios = array();
    $TodasLasCaracteristicas = array();

    if ( $Paquete ) {
      
      foreach ( $Paquete as $servicio_paquete ){
        
        $Servicio = Servicio::where('id', $servicio_paquete['id_servicio'] )->first();
        array_push( $Servicios , $Servicio );
  
      }
    }

    //Falta armar un array que contenga arrays de las caracteristicas con las que cuenta cada servicios, por cada servicio del paquete y traer el nombre de cada una.
    //Creo que lo de arriba ya está :D
    #Va a haber que hacer una tabla caracteristicas por presupuestos. Sino agregar el nombre de las caracteristicas seleccionadas al input del comentario adicional.

    foreach ( $Servicios as $servicio ) {
      
      $CaracteristicasPorServicio = CaracteristicasPorServicio::where( 'id_servicio' , $servicio->id )
                                  ->Join( 'caracteristicas' , 'caracteristicas_por_servicios.id_caracteristica' , '=' , 'caracteristicas.id' ) 
                                  ->select('caracteristicas.*')
                                  ->get();

      array_push( $TodasLasCaracteristicas , $CaracteristicasPorServicio );
      
    }
    //dd( $Paquete , $TodasLasCaracteristicas); //Las llaves del paquete no se acomodan cuando se elimina el servicio. Ver si yo le doy ese numero o lo puse para 
    //que sea algun id


    
    return view('Principal.carrito' , [ 'TodasLasCaracteristicas' => $TodasLasCaracteristicas ] );
  }

  public function AgregarAlPaquete( Request $request ){
    // $Session = Session::all();
    // dd($Session);
    if ( Auth::user()->rol == 'Administrador' ) {

      return redirect()->route('MostrarServicio', [ 'id' => $request->id_servicio ])->with( 'AgregarPaqueteDenegado',' ' );

    }

    $Servicio = Servicio::findOrfail( $request->id_servicio );

    // Controlar que no se agregue su propio servicio
    $Prestador = Prestador::where( 'user_id' , Auth::user()->id )->first();
    
    if ($Prestador) {
      if ( $Servicio->id_prestador == $Prestador->id ) {
        return redirect()->route('MostrarServicio', [ 'id' => $request->id_servicio ])->with( 'AutoReservaDenegada',' ' );
      }
    }

    $id_servicio = $request->id_servicio;
    $NombreServicio = $Servicio->nombre;

    if ( $Servicio->precio_a_convenir != null ) {
      $Precio = 'Precio a convenir';
    }else{
      $Precio = $Servicio->precio;
    }

    //Session
    if ( Session::has('Servicio') ) { //Si existe la variable Session Servicio hay que agregar los items.
        
        $ServicioSession = $request->session()->get('Servicio'); //Trae Servicio de la session
        // $PrecioFinal = Session::get('PrecioFinal'); //Trae el Precio final del carrito en la sesison

        // Comprobar que no exista el servicio en el paquete
        foreach ($ServicioSession as $servicio) {
            if ($servicio['id_servicio'] == $id_servicio ) {
                return redirect()->route('MostrarServicio', [ 'id' => $id_servicio ])->with( 'Existe', ' ' );
            }
        }

        // Calcula el precio final a pagar de todo el paquete
        // $PrecioFinal = $PrecioFinal + $Precio;
        // $request->session()->put('PrecioFinal', $PrecioFinal); //Agrega a la session

        //Agrega el nuevo elemento a un array para luego agregarlo a session
        array_push( $ServicioSession, [   'id_servicio' => $id_servicio,
                                        'NombreServicio' => $NombreServicio,
                                        'Precio' => $Precio ] );

        
        $request->session()->put('Servicio', $ServicioSession); //Agrega a la Session

    } else { //Si no existe se crea un array, se agrega el item al array y se hace un put(Agregar) en una nueva variable Session 'Servicio'
        $ServicioSession = array();
        array_push( $ServicioSession, [ 'id_servicio' => $id_servicio,
                                'NombreServicio' => $NombreServicio,
                                'Precio' => $Precio ] );

        $request->session()->put('Servicio', $ServicioSession); //Agrega a la Session

        // Calcula el precio final a pagar de todo el paquete
        // $PrecioFinal = $Precio;
        // $request->session()->put('PrecioFinal', $PrecioFinal); //Agrega a la Session
    }

    return redirect()->route('MostrarServicio', [ 'id' => $id_servicio ])->with( 'Agregado', 'Servicio agregado al paquete con éxito' );

    //Se trae Session otra vez con los nuevos datos CREO QUE AL SER POR HTTP POST NO ES NECESARIO ESTO YA QUE SE ACTUALIZA SOLO
    // $ServicioSession = Session::get('Servicio');
    // return $ServicioSession; //Retorna Session con el nuevo dato 
  }

  public function EliminarDelPaquete( Request $request ){

    if ( Session::has('Servicio') ) {
      $Paquete = $request->session()->get('Servicio');

      foreach ( $Paquete as $key => $servicio ) {   //Recorrer el array

          if ( $servicio['id_servicio'] == $request->id_servicio ) { //Comprueba que el id_servicio enviado desde el front coincida con el produto en la session para poder borrarlo.
              $key_str = strval($key); //Es necesario convertir a string para la funcion unset
              
              unset($Paquete[$key_str]); //Borramos el item usando la key que convertimos en string
          }
      }

      $Paquete = array_values($Paquete); //Reordena las keys
      $request->session()->put('Servicio', $Paquete); //Guarda el array modificado en Session nuevamente.

      $Paquete = Session::get('Servicio'); //Trae lo nuevo de session para mostrar
    }else{
      $Paquete = null;
    }

    return redirect()->route('MostrarPaquete');

  }

  public function ResultadosBusqueda( Request $request){
    // dd($request);
    // Mostrar caracteristicas seleccionadas checkeadas
    if ( $request->caracteristicas ) {
      $caract_elegidas = array();
      foreach ( $request->caracteristicas as $caracteristica ) {
        $nombreCaract = Caracteristica::where( 'id' , $caracteristica )->pluck('nombre')->first();
        array_push( $caract_elegidas , $nombreCaract );
      }
    }

    // Mostrar destacados checkeado
    if ( $request->destacados ) {
      $destacados = 1;
      }else{
      $destacados = null;
    }

    // Para titulos
      $categ_result =  Categoria::where( 'id' , $request->categoria )->pluck('nombre')->first();
      $prov_result = $request->provincia_nombre;
      $loc_result = $request->localidad;
    // Fin para titulos

    // Caracteristicas
      $Caracteristicas = Caracteristica_por_categoria::where('id_categoria', $request->categoria)
      ->Join( 'caracteristicas' , 'caracteristica_por_categorias.id_caracteristica' , '=' , 'caracteristicas.id' )
      ->select('caracteristicas.*')
      ->get();
    // Caracteristicas

    // Rango de precios
      $PrecioMax = Servicio::where( 'precio' , '!=', null )->where( 'id_categoria' , $request->categoria )->pluck('precio')->max();
      $PrecioMin = Servicio::where( 'precio' , '!=', null )->where( 'id_categoria' , $request->categoria )->pluck('precio')->min();
    // Fin rango de precios

    // Id
    $categoria_id = $request->categoria;

    // Servicios por ubicación
      $ServCatZona = Servicio::where( 'servicios.id_categoria' , $request->categoria )
      ->Join( 'prestadors' , 'servicios.id_prestador' , 'prestadors.id' )
      ->Join( 'users' , 'prestadors.user_id' , 'users.id')
      ->where('users.rol' , 'Prestador')
      ->where('servicios.moderado' , 1)
      ->where( 'servicios.aprobado' , 1 )
      ->where( 'users.provincia' , $request->provincia_nombre )
      ->where( 'users.localidad' , $request->localidad )
      ->select('servicios.*','users.provincia', 'users.localidad')
      ->get();
    // Fin servicios por ubicación

    // Nuevo algoritmo
      $ServiciosFiltrados = array();
      if ( $request->destacados && $request->caracteristicas ) {

        // Busqueda por caracteristicas
          $Servicios = array();
          $ServCaractArray = array();
          $requestLength = count($request->caracteristicas);
          
          // Obtengo las caracteristicas por servicio de los servicios que cumplen con categoria y ubicacion dados.
          foreach ( $ServCatZona as $ser_cat_zona ) {
            $ServCaract = CaracteristicasPorServicio::where( 'id_servicio' , $ser_cat_zona->id )->get();
            array_push( $ServCaractArray , $ServCaract ); //$ServCaractArray devulve 3 array con 2 servicios dentro cada uno.
          }

          $bandera = 0;

          foreach ($ServCaractArray as $serv_caract_array) { //$serv_caract_array devuelve 2 objetos que son el mismo servicio con sus caracteristicas diferentes
            if ( $requestLength == count($serv_caract_array) ) {
              foreach ($serv_caract_array as $serv_caract) { //$serv_caract es cada fila de los servicios con caracteristicas.

                foreach ( $request->caracteristicas as $caracteristica ) {
                  if ( $serv_caract_array->contains( 'id_caracteristica' , $caracteristica ) ) { //La caract. del servicio se encuentra en el request?
                      // Guardo id servicio en una variable
                      $id_servicio = $serv_caract->id_servicio;
                      $bandera = 1;

                    }else{ //AL primer NO YA SALE
                      
                      $bandera = 0;
                      continue 3 ; //Esto deberia continuar por el siguiente elemento del array grande.
                    } 
                }//foreach caracteristica
              } //Foreach chico
            }else{
              continue;
            }
            // Fuera del foreach chico
            if ($bandera = 0) {
              break;
            }else{
              array_push( $Servicios , $id_servicio );
            }
          } //Foreach Grande
          
          //Aqui busca los servicios por los id del array para mostrar toda la info en el front.
          $ServiciosPorCaracteristicas = array();
          foreach ( $ServCatZona as $serv_cat_zona ) {
            if ( in_array( $serv_cat_zona->id , $Servicios ) ) {
              array_push( $ServiciosPorCaracteristicas , $serv_cat_zona );
            }
          }
        // Fin busqueda por caracteristicas

        // Busqueda de destacados
          foreach ( $ServiciosPorCaracteristicas as $servicio ) {
              
            $ReservasConcretadas = Reserva::where( 'id_servicio' , $servicio->id )
                                    ->where( 'concretado' , 1 )
                                    ->get();
            
            $Cantidad = count($ReservasConcretadas);

            if ( $Cantidad >= 5 && $Cantidad < 25) {
                $servicio_concretado = Servicio::where( 'servicios.deleted_at' , null )
                                                ->where( 'servicios.id' , $servicio->id )
                                                ->Join( 'categorias' , 'servicios.id_categoria' , '=' , 'categorias.id' )
                                                ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
                                                ->Join( 'users' , 'prestadors.user_id' , '=' , 'users.id' )
                                                ->select('servicios.*','categorias.nombre as nombre_categoria','users.provincia', 'users.localidad')
                                                ->first();

                array_push( $ServiciosFiltrados , $servicio_concretado );
            }
            $Cantidad = 0;
          }
        // Fin busqueda de destacados

        return view( 'Principal.resultados_busqueda', [ 
          'Servicios' => $ServiciosFiltrados, 
          'Caracteristicas' => $Caracteristicas,
          'categ_result' => $categ_result,
          'prov_result' => $prov_result,
          'loc_result' => $loc_result,
          'PrecioMax' => $PrecioMax,
          'PrecioMin' => $PrecioMin,
          'categoria_id' => $categoria_id,
          'caract_elegidas' => $caract_elegidas,
          'destacados' => $destacados
        ]);

      }else{

        if ( $request->destacados ) {
          
          // Busqueda de destacados
            foreach ( $ServCatZona as $servicio ) {
                
              $ReservasConcretadas = Reserva::where( 'id_servicio' , $servicio->id )
                                      ->where( 'concretado' , 1 )
                                      ->get();
              
              $Cantidad = count($ReservasConcretadas);

              if ( $Cantidad >= 5 && $Cantidad < 25) {
                  $servicio_concretado = Servicio::where( 'servicios.deleted_at' , null )
                                                  ->where( 'servicios.id' , $servicio->id )
                                                  ->Join( 'categorias' , 'servicios.id_categoria' , '=' , 'categorias.id' )
                                                  ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
                                                  ->Join( 'users' , 'prestadors.user_id' , '=' , 'users.id' )
                                                  ->select('servicios.*','categorias.nombre as nombre_categoria','users.provincia', 'users.localidad')
                                                  ->first();

                  array_push( $ServiciosFiltrados , $servicio_concretado );
              }
              $Cantidad = 0;
            }
          // Fin busqueda de destacados
        
        $caract_elegidas = array();
        return view( 'Principal.resultados_busqueda', [ 
          'Servicios' => $ServiciosFiltrados, 
          'Caracteristicas' => $Caracteristicas,
          'categ_result' => $categ_result,
          'prov_result' => $prov_result,
          'loc_result' => $loc_result,
          'PrecioMax' => $PrecioMax,
          'PrecioMin' => $PrecioMin,
          'categoria_id' => $categoria_id,
          'caract_elegidas' => $caract_elegidas,
          'destacados' => $destacados
        ]);

        }else{

          if ( $request->caracteristicas ) {

            // Busqueda por caracteristicas
              $Servicios = array();
              $ServCaractArray = array();
              $requestLength = count($request->caracteristicas);
              
              // Obtengo las caracteristicas por servicio de los servicios que cumplen con categoria y ubicacion dados.
              foreach ( $ServCatZona as $ser_cat_zona ) {
                $ServCaract = CaracteristicasPorServicio::where( 'id_servicio' , $ser_cat_zona->id )->get();
                array_push( $ServCaractArray , $ServCaract ); //$ServCaractArray devulve 3 array con 2 servicios dentro cada uno.
              }

              $bandera = 0;

              foreach ($ServCaractArray as $serv_caract_array) { //$serv_caract_array devuelve 2 objetos que son el mismo servicio con sus caracteristicas diferentes
                if ( $requestLength == count($serv_caract_array) ) {
                  foreach ($serv_caract_array as $serv_caract) { //$serv_caract es cada fila de los servicios con caracteristicas.

                    foreach ( $request->caracteristicas as $caracteristica ) {
                      if ( $serv_caract_array->contains( 'id_caracteristica' , $caracteristica ) ) { //La caract. del servicio se encuentra en el request?
                          // Guardo id servicio en una variable
                          $id_servicio = $serv_caract->id_servicio;
                          $bandera = 1;

                        }else{ //AL primer NO YA SALE
                          
                          $bandera = 0;
                          continue 3 ; //Esto deberia continuar por el siguiente elemento del array grande.
                        } 
                    }//foreach caracteristica
                  } //Foreach chico
                }else{
                  continue;
                }
                // Fuera del foreach chico
                if ($bandera = 0) {
                  break;
                }else{
                  array_push( $Servicios , $id_servicio );
                }
              } //Foreach Grande
              
              //Aqui busca los servicios por los id del array para mostrar toda la info en el front.
              $ServiciosFiltrados = array();
              foreach ( $ServCatZona as $serv_cat_zona ) {
                if ( in_array( $serv_cat_zona->id , $Servicios ) ) {
                  array_push( $ServiciosFiltrados , $serv_cat_zona );
                }
              }
            // Fin busqueda por caracteristicas

            return view( 'Principal.resultados_busqueda', [ 
              'Servicios' => $ServiciosFiltrados, 
              'Caracteristicas' => $Caracteristicas,
              'categ_result' => $categ_result,
              'prov_result' => $prov_result,
              'loc_result' => $loc_result,
              'PrecioMax' => $PrecioMax,
              'PrecioMin' => $PrecioMin,
              'categoria_id' => $categoria_id,
              'caract_elegidas' => $caract_elegidas,
              'destacados' => $destacados
            ]);

          }else{

            // Sin destacados y sin caracteristicas
            $caract_elegidas = array();
            return view( 'Principal.resultados_busqueda', [ 
              'Servicios' => $ServCatZona, 
              'Caracteristicas' => $Caracteristicas,
              'categ_result' => $categ_result,
              'prov_result' => $prov_result,
              'loc_result' => $loc_result,
              'PrecioMax' => $PrecioMax,
              'PrecioMin' => $PrecioMin,
              'categoria_id' => $categoria_id,
              'caract_elegidas' => $caract_elegidas,
              'destacados' => $destacados
            ]);

          }
        }
      }


    // Fin nuevo algoritmo

  }
  
  public function FiltrarResultados( Request $request ){
    //dd($request->all());
    
    // Servicios por ubicación
      $query = Servicio::where( 'servicios.id_categoria' , $request->categoria_id )
      ->Join( 'prestadors' , 'servicios.id_prestador' , 'prestadors.id' )
      ->Join( 'users' , 'prestadors.user_id' , 'users.id')
      // ->where( 'servicios.deleted_at' , '=', null )
      ->where('servicios.moderado' , 1)
      ->where('servicios.aprobado' , 1)
      ->where( 'users.provincia' , $request->provincia )
      ->where( 'users.localidad' , $request->localidad );

      // Filtro precio
        if ( $request->precios_todos == 1 ) { //SE ESTA CLAVANDO AQUI PORQUE LEE PRIMERO EL CHECKBOX TODOS LOS PRECIOS

          $query->select('servicios.*' , 'users.provincia' , 'users.localidad'); //LA COSA ES COMO BUSCO QUE SE CUMPLAN CUALQUIER PRECIO Y PRECIO A CONVENIR, con esto pareceria que se cumple pero no anda.
          
          }else{

            if ( $request->precio_a_convenir == 1 ){
              $query->where( 'precio_a_convenir' , $request->precio_a_convenir );

              }else{
              $query->whereBetween( 'precio' , [ $request->minimo , $request->maximo ] );
            }
            
        }
      // Fin filtro precio

      $ServCatZona = $query->select('servicios.*' , 'users.provincia' , 'users.localidad')->get();
    // Fin servicios por ubicación
    
    // Nuevo algoritmo de filtrado
    $ServiciosFiltrados = array();
      if ( $request->caracteristicas && $request->destacados == 1 ) {
        
        // Búsqueda por caracteristicas

          $Servicios = array();
          $ServCaractArray = array();
          $requestLength = count($request->caracteristicas);
          
          // Obtengo las caracteristicas por servicio de los servicios que cumplen con categoria y ubicacion dados.
          foreach ( $ServCatZona as $ser_cat_zona ) {
            $ServCaract = CaracteristicasPorServicio::where( 'id_servicio' , $ser_cat_zona->id )->get();
            array_push( $ServCaractArray , $ServCaract ); //$ServCaractArray devulve 3 array con 2 servicios dentro cada uno.
          }

          $bandera = 0;

          // Tipo de búsqueda
          if ( $request->tipo_busqueda == 'o' ) {
            # Aqui muestra los servicios que tengan al menos una vez esas caracteristicas seleccionadas
            //Busqueda por O
            foreach ($ServCaractArray as $serv_caract_array) { //$serv_caract_array devuelve 2 objetos que son el mismo servicio con sus caracteristicas diferentes
              
              foreach ($serv_caract_array as $serv_caract) { //$serv_caract es cada fila de los servicios con caracteristicas.
    
                foreach ( $request->caracteristicas as $caracteristica ) {
                  if ( $serv_caract_array->contains( 'id_caracteristica' , $caracteristica ) ) { //La caract. del servicio se encuentra en el request?

                    array_push( $Servicios , $serv_caract->id_servicio );

                  } 
                }//foreach caracteristica

              } //Foreach chico
              
            } //Foreach Grande
          // Fin Busqueda por O
          }else{

            if ( $request->tipo_busqueda == 'y' ) {
              # Aquí va el flujo normal para mostrar los servicios que cumplen con todas las caracteristicas.
              foreach ($ServCaractArray as $serv_caract_array) { //$serv_caract_array devuelve 2 objetos que son el mismo servicio con sus caracteristicas diferentes
                if ( $requestLength == count($serv_caract_array) ) {
                  foreach ($serv_caract_array as $serv_caract) { //$serv_caract es cada fila de los servicios con caracteristicas.
        
                    foreach ( $request->caracteristicas as $caracteristica ) {
                      if ( $serv_caract_array->contains( 'id_caracteristica' , $caracteristica ) ) { //La caract. del servicio se encuentra en el request?
                          // Guardo id servicio en una variable
                          $id_servicio = $serv_caract->id_servicio;
                          $bandera = 1;
        
                        }else{ //AL primer NO YA SALE
                          
                          $bandera = 0;
                          continue 3 ; //Esto deberia continuar por el siguiente elemento del array grande.
                        } 
                    }//foreach caracteristica
                  } //Foreach chico
                }else{
                  continue;
                }
                // Fuera del foreach chico
                if ($bandera = 0) {
                  break;
                }else{
                  array_push( $Servicios , $id_servicio );
                }
              } //Foreach Grande
            }
          }
          
          //Aqui busca los servicios por los id del array para mostrar toda la info en el front.
          $ServiciosPorCaracteristicas = array();
          foreach ( $ServCatZona as $serv_cat_zona ) {
            if ( in_array( $serv_cat_zona->id , $Servicios ) ) {
              array_push( $ServiciosPorCaracteristicas , $serv_cat_zona );
            }
          }

        // Fin búsqueda por caracteristicas

        // Busqueda de destacados
          foreach ( $ServiciosPorCaracteristicas as $servicio ) {
                
            $ReservasConcretadas = Reserva::where( 'id_servicio' , $servicio->id )
                                    ->where( 'concretado' , 1 )
                                    ->get();
            
            $Cantidad = count($ReservasConcretadas);

            if ( $Cantidad >= 5 && $Cantidad < 25) {
                $servicio_concretado = Servicio::where( 'servicios.deleted_at' , null )
                                                ->where( 'servicios.id' , $servicio->id )
                                                ->Join( 'categorias' , 'servicios.id_categoria' , '=' , 'categorias.id' )
                                                ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
                                                ->Join( 'users' , 'prestadors.user_id' , '=' , 'users.id' )
                                                ->select('servicios.*','categorias.nombre as nombre_categoria','users.provincia', 'users.localidad')
                                                ->first();

                array_push( $ServiciosFiltrados , $servicio_concretado );
            }
            $Cantidad = 0;
          }
        // Fin busqueda de destacados

        return ([ $ServiciosFiltrados , $request->provincia , $request->localidad ]);
      }else{
        
        if ( $request->caracteristicas ) {
          
          // Búsqueda por caracteristicas

            $Servicios = array();
            $ServCaractArray = array();
            $requestLength = count($request->caracteristicas);
            
            // Obtengo las caracteristicas por servicio de los servicios que cumplen con categoria y ubicacion dados.
            foreach ( $ServCatZona as $ser_cat_zona ) {
              $ServCaract = CaracteristicasPorServicio::where( 'id_servicio' , $ser_cat_zona->id )->get();
              array_push( $ServCaractArray , $ServCaract ); //$ServCaractArray devulve 3 array con 2 servicios dentro cada uno.
            }

            $bandera = 0;

            // Tipo de búsqueda
            if ( $request->tipo_busqueda == 'o' ) {
              # Aqui muestra los servicios que tengan al menos una vez esas caracteristicas seleccionadas
              //Busqueda por O
              foreach ($ServCaractArray as $serv_caract_array) { //$serv_caract_array devuelve 2 objetos que son el mismo servicio con sus caracteristicas diferentes
                
                foreach ($serv_caract_array as $serv_caract) { //$serv_caract es cada fila de los servicios con caracteristicas.
      
                  foreach ( $request->caracteristicas as $caracteristica ) {
                    if ( $serv_caract_array->contains( 'id_caracteristica' , $caracteristica ) ) { //La caract. del servicio se encuentra en el request?

                      array_push( $Servicios , $serv_caract->id_servicio );

                    } 
                  }//foreach caracteristica

                } //Foreach chico
                
              } //Foreach Grande
            // Fin Busqueda por O
            }else{

              if ( $request->tipo_busqueda == 'y' ) {
                # Aquí va el flujo normal para mostrar los servicios que cumplen con todas las caracteristicas.
                foreach ($ServCaractArray as $serv_caract_array) { //$serv_caract_array devuelve 2 objetos que son el mismo servicio con sus caracteristicas diferentes
                  if ( $requestLength == count($serv_caract_array) ) {
                    foreach ($serv_caract_array as $serv_caract) { //$serv_caract es cada fila de los servicios con caracteristicas.
          
                      foreach ( $request->caracteristicas as $caracteristica ) {
                        if ( $serv_caract_array->contains( 'id_caracteristica' , $caracteristica ) ) { //La caract. del servicio se encuentra en el request?
                            // Guardo id servicio en una variable
                            $id_servicio = $serv_caract->id_servicio;
                            $bandera = 1;
          
                          }else{ //AL primer NO YA SALE
                            
                            $bandera = 0;
                            continue 3 ; //Esto deberia continuar por el siguiente elemento del array grande.
                          } 
                      }//foreach caracteristica
                    } //Foreach chico
                  }else{
                    continue;
                  }
                  // Fuera del foreach chico
                  if ($bandera = 0) {
                    break;
                  }else{
                    array_push( $Servicios , $id_servicio );
                  }
                } //Foreach Grande
              }
            }
            
            //Aqui busca los servicios por los id del array para mostrar toda la info en el front.
            $ServiciosFiltrados = array();
            foreach ( $ServCatZona as $serv_cat_zona ) {
              if ( in_array( $serv_cat_zona->id , $Servicios ) ) {
                array_push( $ServiciosFiltrados , $serv_cat_zona );
              }
            }

          // Fin búsqueda por caracteristicas
        
          return ([ $ServiciosFiltrados , $request->provincia , $request->localidad ]);

        }else{

          if ( $request->destacados == 1 ) {
            
            // Busqueda de destacados
              foreach ( $ServCatZona as $servicio ) {
                  
                $ReservasConcretadas = Reserva::where( 'id_servicio' , $servicio->id )
                                        ->where( 'concretado' , 1 )
                                        ->get();
                
                $Cantidad = count($ReservasConcretadas);

                if ( $Cantidad >= 5 && $Cantidad < 25) {
                    $servicio_concretado = Servicio::where( 'servicios.deleted_at' , null )
                                                    ->where( 'servicios.id' , $servicio->id )
                                                    ->Join( 'categorias' , 'servicios.id_categoria' , '=' , 'categorias.id' )
                                                    ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
                                                    ->Join( 'users' , 'prestadors.user_id' , '=' , 'users.id' )
                                                    ->select('servicios.*','categorias.nombre as nombre_categoria','users.provincia', 'users.localidad')
                                                    ->first();

                    array_push( $ServiciosFiltrados , $servicio_concretado );
                }
                $Cantidad = 0;
              }
            // Fin busqueda de destacados

          return ([ $ServiciosFiltrados , $request->provincia , $request->localidad ]);

          }else{

            return ([ $ServCatZona , $request->provincia , $request->localidad ]);

          }
        }
      }
    // Fin nuevo algoritmo de filtrado
    
  }

  public function BuscadorPublicados( Request $request){

    $Servicios = Servicio::where('servicios.deleted_at', null)
                          ->Join( 'prestadors' , 'servicios.id_prestador' , 'prestadors.id' )
                          ->Join( 'users' , 'prestadors.user_id' , 'users.id' )
                          ->Join( 'categorias' , 'servicios.id_categoria' , '=' , 'categorias.id' )
                          ->where('servicios.moderado' , 1)
                          ->where('servicios.aprobado' , 1)
                          ->where( 'users.provincia' , $request->provincia )
                          ->where( 'users.localidad' , $request->localidad )
                          ->select('servicios.*' , 'categorias.nombre as nombre_categoria','users.provincia', 'users.localidad')
                          ->get();

    $Categorias = Categoria::all();

    return ( [$Servicios , $Categorias]);
  }

  public function ListarServiciosModerar(){

    $ServiciosSinModerar = Servicio::where( 'moderado' , 0 )->where( 'aprobado' , 0 )
    ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
    ->select('servicios.*' , 'prestadors.nombre as nombre_prestador')->get();
    return view('AdminLTE.Admin.moderar' , [ 'ServiciosSinModerar' => $ServiciosSinModerar ] );

  }

  public function MostrarNoModeradoModal( Request $request ){

    $Servicio = Servicio::findOrfail( $request->id_servicio );

    $CaracteristicasDelServicio = array();
      

    $Caracteristicas = CaracteristicasPorServicio::where( 'caracteristicas_por_servicios.id_servicio' , $Servicio->id )
                                      ->Join( 'caracteristicas' , 'caracteristicas_por_servicios.id_caracteristica' , '=' , 'caracteristicas.id' )
                                      ->select('caracteristicas.nombre')
                                      ->get();
    

    
    return( [ $Servicio , $Caracteristicas ] );
  }

  public function AprobarServicio( Request $request ){

    $Servicio =  Servicio::findOrfail($request->id_servicio);
    $Servicio->moderado = 1;
    $Servicio->aprobado = 1;
    $Servicio->update();

    $user_notificar = Prestador::where( 'id' , $Servicio->id_prestador )->pluck('prestadors.user_id')->first();

    //Crear una notificacion
    Notificacion::create([
      'user_id_notificar' => $user_notificar,
      'user_id_trigger' => Auth::user()->id,
      'id_evento' => 9, //Servicio aprobado
      'visto' => 0,
      ]);

    return redirect()->route('ListarServiciosModerar')->with( 'ServicioAprobado' , ' ' );
       

  }

  public function RechazarServicio( Request $request ){

    
    $Servicio =  Servicio::findOrfail($request->id_servicio);
    $Servicio->moderado = 1;
    $Servicio->aprobado = 0;
    $Servicio->update();

    $user_notificar = Prestador::where( 'id' , $Servicio->id_prestador )->pluck('prestadors.user_id')->first();

    //Crear una notificacion
    Notificacion::create([
      'user_id_notificar' => $user_notificar,
      'user_id_trigger' => Auth::user()->id,
      'id_evento' => 10, //Servicio rechazado
      'visto' => 0,
      ]);

    return redirect()->route('ListarServiciosModerar')->with( 'ServicioRechazado' , ' ' );

  }


  // public function MostrarPlanes(){
  //   return view('Ecommerce.planes_publicidad');
  // }

}

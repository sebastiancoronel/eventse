<?php

namespace App\Http\Controllers;

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
      'nombre' => 'required',
      'descripcion' => 'required',
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
        'precio' => 'required|integer'
      ]);
    }

    $Servicio->id_categoria = $request->id_categoria;
    $Servicio->id_prestador = $Prestador->id;
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

    return redirect()->route('ServicioPublicadoConExito')->with('Success','Servicio publicado con éxito')->with('ClaseRandom',$ClaseRandom);
  }

  public function ServicioPublicadoConExito(){
    return view('Principal.servicio_publicado_exitosamente');
  }

  public function AlmacenarPregunta(Request $request){

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

    return $ActualizarPreguntas;
  }

  public function AgregarAlPaquete( Request $request ){
    // $Session = Session::all();
    // dd($Session);

    $Servicio = Servicio::findOrfail( $request->id_servicio );

    $id_servicio = $request->id_servicio;
    $NombreServicio = $Servicio->nombre;

    if ( $Servicio->precio_a_convenir != null ) {
      $Precio = $Servicio->precio_a_convenir;
    }else{
      $Precio = $Servicio->precio;
    }

    //Session
    if ( Session::has('Servicio') ) { //Si existe la variable Session Servicio hay que agregar los items.
        
        $ServicioSession = $request->session()->get('Servicio'); //Trae Servicio de la session
        $PrecioFinal = Session::get('PrecioFinal'); //Trae el Precio final del carrito en la sesison

        // Comprobar que no exista el servicio en el paquete
        foreach ($ServicioSession as $servicio) {
            if ($servicio['id_servicio'] == $id_servicio ) {
                return redirect()->route('MostrarServicio', [ 'id' => $id_servicio ])->with( 'Existe', ' ' );
            }
        }

        // Calcula el precio final a pagar de todo el paquete
        $PrecioFinal = $PrecioFinal + $Precio;
        $request->session()->put('PrecioFinal', $PrecioFinal); //Agrega a la session

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
        $PrecioFinal = $Precio;
        $request->session()->put('PrecioFinal', $PrecioFinal); //Agrega a la Session
    }

    return redirect()->route('MostrarServicio', [ 'id' => $id_servicio ])->with( 'Agregado', 'Servicio agregado al paquete con éxito' );

    //Se trae Session otra vez con los nuevos datos CREO QUE AL SER POR HTTP POST NO ES NECESARIO ESTO YA QUE SE ACTUALIZA SOLO
    // $ServicioSession = Session::get('Servicio');
    // return $ServicioSession; //Retorna Session con el nuevo dato 
}
  
  // public function MostrarPlanes(){
  //   return view('Ecommerce.planes_publicidad');
  // }

}

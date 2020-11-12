<?php

namespace App\Http\Controllers;

use Auth;
use App\Caracteristica_por_categoria;
use App\CaracteristicasPorServicio;
use App\Caracteristica;
use App\Prestador;
use App\Servicio;
use App\Categoria;
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
    $Inmuebles = Inmueble::all();
    $Juegos = Juego::all();
    $Animaciones = Animacion::all();
    $Mobiliarios = Mobiliario::all();
    $Caterings = Catering::all();
    $MusicaDjs = MusicaDj::all();
    return view('Ecommerce.servicios_publicados',['Categorias'=>$Categorias, 'Inmuebles'=>$Inmuebles,'Juegos'=>$Juegos,'Animaciones'=>$Animaciones,'Mobiliarios'=>$Mobiliarios,'Caterings'=>$Caterings,'MusicaDjs'=>$MusicaDjs]);
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

  public function AlmacenarServicio( Request $request ){
    
    $request->validate([      
      'nombre' => 'required',
      'descripcion' => 'required',
      'foto_1' => 'required',
      'foto_2' => 'required',
      'foto_3' => 'required',
      'foto_4' => 'required'
    ]);

    $Prestador = Prestador::where('id', Auth::user()->id)
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

    foreach ( $request->caracteristica as $caracteristica ) {
      $CaracteristicasPorServicio = new CaracteristicasPorServicio;
      $CaracteristicasPorServicio->id_servicio = $Servicio->id;
      $CaracteristicasPorServicio->id_caracteristica = $caracteristica;
      $CaracteristicasPorServicio->save();
    }


    //return redirect()->route('')->with('Success','Servicio publicado con éxito');
  }

  public function MostrarPlanes(){
    return view('Ecommerce.planes_publicidad');
  }

}

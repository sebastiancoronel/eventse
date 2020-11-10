<?php

namespace App\Http\Controllers;

use Auth;
use App\Caracteristica_por_categoria;
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
    
    $Categoria = Categoria::findOrfail($request->id_categoria);

    $Caracteristicas = Caracteristica_por_categoria::where( 'id_categoria' , $request->id_categoria )
                                                  ->Join( 'caracteristicas' , 'caracteristica_por_categorias.id_caracteristica' , '=' , 'caracteristicas.id' )
                                                  ->select('caracteristicas.*')
                                                  ->get();
    return view('Principal.crear_servicio' , [ 'Caracteristicas' => $Caracteristicas, 'Categoria' => $Categoria ] );
  }

  public function AlmacenarServicio( Request $request ){
    dd($request);
    $request->validate([      
      'nombre' => 'required',
      'descripcion' => 'required',
      'foto_1' => 'required'
    ]);

    $Servicio = new Servicio;
    $Servicio->nombre = $request->nombre;
    $Servicio->descripcion = $request->descripcion;
    
    $random_string = Str::random(20);
    $Foto = $request->file('foto_1');
    $NombreImagen = $random_string . '.' . $Foto->getClientOriginalExtension();
    $RutaImagen = public_path('images/servicios');
    $Foto->move($RutaImagen, $NombreImagen);
    $Servicio->foto_1 = 'images/servicios/' . $NombreImagen;
    
    if ( $request->hasFile('foto_2') ) {
      $random_string = Str::random(20);
      $Foto = $request->file('foto_2');
      $NombreImagen = $random_string . '.' . $Foto->getClientOriginalExtension();
      $RutaImagen = public_path('images/servicios');
      $Foto->move($RutaImagen, $NombreImagen);
      $Servicio->foto_2 = 'images/servicios/' . $NombreImagen;
    }

    if ( $request->hasFile('foto_3') ) {
      $random_string = Str::random(20);
      $Foto = $request->file('foto_3');
      $NombreImagen = $random_string . '.' . $Foto->getClientOriginalExtension();
      $RutaImagen = public_path('images/servicios');
      $Foto->move($RutaImagen, $NombreImagen);
      $Servicio->foto_3 = 'images/servicios/' . $NombreImagen;
    }

    if ( $request->hasFile('foto_4') ) {
      $random_string = Str::random(20);
      $Foto = $request->file('foto_4');
      $NombreImagen = $random_string . '.' . $Foto->getClientOriginalExtension();
      $RutaImagen = public_path('images/servicios');
      $Foto->move($RutaImagen, $NombreImagen);
      $Servicio->foto_4 = 'images/servicios/' . $NombreImagen;
    }

    $Servicio->precio = $request->precio;
    
    if ( $request->precio_a_convenir == 1 ) {
      $Servicio->precio_a_convenir = 1;
    }

    $Servicio->id_categoria = $request->id_categoria;
    $Servicio->id_prestador = //FALTA VINCULAR AL ID DEL PRESTADOR;
  }

  public function MostrarPlanes(){
    return view('Ecommerce.planes_publicidad');
  }

}

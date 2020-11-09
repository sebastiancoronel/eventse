<?php

namespace App\Http\Controllers;

use Auth;
use App\Inmueble;
use App\Juego;
use App\Animacion;
use App\Mobiliario;
use App\Catering;
use App\MusicaDj;
use App\Prestador;
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

  public function CrearServicio(Request $id){

    return view('Principal.crear_servicio');
  }

  public function MostrarPlanes(){
    return view('Ecommerce.planes_publicidad');
  }

}

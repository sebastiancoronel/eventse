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

class ServicioController extends Controller
{
    public function Publicar(){
      return view('Ecommerce.publicar');
}

  public function ServiciosPublicados(){
    $Categorias = Categoria::all();
    $Inmuebles = Inmueble::all();
    return view('Ecommerce.servicios_publicados',['Categorias'=>$Categorias, 'Inmuebles'=>$Inmuebles]);
  }

  // public function FormularioIluminacion(){
  //
  //   return view('Ecommerce.Formularios_Publicacion.iluminacion');
  // }

  // public function FormularioOrnamentacion(){
  //
  //   return view('Ecommerce.Formularios_Publicacion.ornamentacion');
  // }

  

  // public function FormularioShows(){
  //
  //   return view('Ecommerce.Formularios_Publicacion.shows');
  // }

  public function MostrarPlanes(){
    return view('Ecommerce.planes_publicidad');
  }

  public function Detalles(){
    return view('Ecommerce.articulo_detalle');
  }

}

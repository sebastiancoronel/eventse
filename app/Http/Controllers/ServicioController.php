<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function Publicar(){
      return view('Ecommerce.publicar');
}

  public function ServiciosPublicados(){
    return view('Ecommerce.servicios_publicados');
  }

/*
=============
  Inmuebles
=============
*/

  public function FormularioInmueble(){
    //Traer Provincias y Localidades
    $path = storage_path() . "/json/ProvinciasLocalidades.json";
    $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
  return view('Ecommerce.Formularios_Publicacion.inmuebles',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
  }

  public function PublicarInmueble(Request $req){
    dd($req);
    
  }

/*
=============
  Juegos
=============
*/
  public function FormularioJuegos(){

    return view('Ecommerce.Formularios_Publicacion.juegos');
  }

  public function FormularioAnimacion(){

    return view('Ecommerce.Formularios_Publicacion.animacion');
  }

  public function FormularioMobiliario(){

    return view('Ecommerce.Formularios_Publicacion.mobiliario');
  }

  public function FormularioCatering(){

    return view('Ecommerce.Formularios_Publicacion.catering');
  }

  public function FormularioIluminacion(){

    return view('Ecommerce.Formularios_Publicacion.iluminacion');
  }

  public function FormularioOrnamentacion(){

    return view('Ecommerce.Formularios_Publicacion.ornamentacion');
  }

  public function FormularioMusicaDj(){

    return view('Ecommerce.Formularios_Publicacion.musicaDj');
  }

  public function FormularioShows(){

    return view('Ecommerce.Formularios_Publicacion.shows');
  }

  public function MostrarPlanes(){
    return view('Ecommerce.planes_publicidad');
  }

  public function Detalles(){
    return view('Ecommerce.articulo_detalle');
  }

}

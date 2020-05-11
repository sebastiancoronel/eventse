<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
  public function Publicar(){
    $path = storage_path() . "/json/ProvinciasLocalidades.json";
    $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
    return view('Ecommerce.publicar', ['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
}

  public function PublicarInmueble(){

    return view('Ecommerce.Formularios_Publicacion.inmuebles');
  }

  public function PublicarJuegos(){

    return view('Ecommerce.Formularios_Publicacion.juegos');
  }

  public function PublicarAnimacion(){

    return view('Ecommerce.Formularios_Publicacion.animacion');
  }

  public function PublicarMobiliario(){

    return view('Ecommerce.Formularios_Publicacion.mobiliario');
  }

  public function PublicarCatering(){

    return view('Ecommerce.Formularios_Publicacion.catering');
  }

  public function PublicarIluminacion(){

    return view('Ecommerce.Formularios_Publicacion.iluminacion');
  }

  public function PublicarOrnamentacion(){

    return view('Ecommerce.Formularios_Publicacion.ornamentacion');
  }

  public function PublicarMusicaDj(){

    return view('Ecommerce.Formularios_Publicacion.musicaDj');
  }

  public function PublicarShows(){

    return view('Ecommerce.Formularios_Publicacion.shows');
  }

  public function MostrarPlanes(){
    return view('Ecommerce.planes_publicidad');
  }

  public function Detalles(){
    return view('Ecommerce.articulo_detalle');
  }

}

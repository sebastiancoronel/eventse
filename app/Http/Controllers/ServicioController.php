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

  public function Detalles(){
    return view('Ecommerce.articulo_detalle');
  }

}

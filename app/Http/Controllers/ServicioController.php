<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
  public function Publicar(){
    return view('Ecommerce.publicar');
}
    public function Detalles(){
      return view('Ecommerce.articulo_detalle');
    }

}

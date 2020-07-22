<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use App\Inmueble;
use App\Juego;
use App\Animacion;
use App\Mobiliario;
use App\Catering;
use App\MusicaDj;
use App\Prestador;
use App\Cliente;
use App\Categoria;
use App\PreguntaInmueble;
use App\OpinionInmueble;


class CarritoController extends Controller
{

    public function ServiciosAgregados(){
      return view('Ecommerce.carrito');
    }
   
}

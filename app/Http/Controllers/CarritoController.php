<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function ServiciosAgregados(){
      return view('Ecommerce.carrito');
    }

    public function AgregarServicio(Request $req){
      
      dd($req);

      $Carrito = new Carrito;

    }
}

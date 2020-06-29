<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;

class CarritoController extends Controller
{

    public function ServiciosAgregados(){
      return view('Ecommerce.carrito');
    }

    public function AgregarServicio(Request $req){
      //dd($req);
      // $CarritoTotal = Carrito::where('id_cliente',$req->id_cliente)->select('total')->get();
      
      // $total=0;
      // foreach ($CarritoTotal as $carrito_total) {
      //   //dd($carrito_total->total);
      //   $total = $total + $carrito_total->total;
      // }
      // dd($total);
      
      

      return view('layouts.barra_navegacion_principal');

    }
}

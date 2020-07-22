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
   
    public function ActualizarCarrito(Request $req){
      
      $Carrito = Carrito::where('id_cliente', $req->id_cliente)
                        ->select('*')
                        ->get();

      $ServiciosCarrito = array();

      foreach ( $Carrito as $carrito ) {
      
      switch ($carrito) {  
            case $carrito->id_inmueble != null:
            $InmuebleAgregado = Inmueble::find($carrito->id_inmueble);
            array_push( $ServiciosCarrito , $InmuebleAgregado );
            //dd($JuegoAgregado);
            break;

            case $carrito->id_juego != null:
            $JuegoAgregado = Juego::find($carrito->id_juego);
            array_push($ServiciosCarrito , $JuegoAgregado );
            //dd($JuegoAgregado);
            break;
            
            case $carrito->id_animacion != null:
            $AnimacionAgregado = Animacion::find($carrito->id_animacion);
            array_push($ServiciosCarrito , $AnimacionAgregado );
            //dd('HAY Animacion');
            break;
            
            case $carrito->id_mobiliario != null:
            $MobiliarioAgregado = Mobiliario::find($carrito->id_mobiliario);
            array_push($ServiciosCarrito , $MobiliarioAgregado );
            //dd('HAY Mobiliario');
            break;

            case $carrito->id_catering != null:
            $CateringAgregado = Catering::find($carrito->id_catering);
            array_push($ServiciosCarrito , $CateringAgregado );
            //dd('HAY Catering');
            break;

            case $carrito->id_musicaDj != null:
            $MusicaDjAgregado = MusicaDj::find($carrito->id_musicaDj);
            array_push($ServiciosCarrito , $MusicaDjAgregado );
            //dd('HAY MusicaDj');
            break;

            default: 
            'El paquete está vacío';
            break;
      }                              
      }

      $CantidadServicios = $Carrito->count();
      
      return response()->json([
      'CantidadServicios' => $CantidadServicios,
      'ServiciosCarrito' => $ServiciosCarrito
      ]);

}
}

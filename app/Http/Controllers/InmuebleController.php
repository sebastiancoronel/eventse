<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
use App\Carrito;


class InmuebleController extends Controller
{

      public function FormularioInmueble() {
        //Traer Provincias y Localidades
        $path = storage_path() . "/json/ProvinciasLocalidades.json";
        $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
        return view('Ecommerce.Formularios_Publicacion.inmuebles',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
      }
    
      public function PublicarInmueble(Request $req){
    
        $user_id = Auth::user()->id;
        $id_Prestador = Prestador::where('user_id',$user_id)->pluck('id')->first();
        $Empresa = Prestador::where('user_id',$user_id)->first();
        $Categoria = Categoria::find($req->id_categoria);
        $FechaPublicacion = date('Y-m-d');
        
    
        // Foto 1
        $Foto_1 = $req->file('foto_1');
        $NombreImagen_1 = 'foto 1' . '.' . $Foto_1->getClientOriginalExtension();
        $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
        $Foto_1->move($RutaImagen, $NombreImagen_1);
    
        // Foto 2
        $Foto_2 = $req->file('foto_2');
        $NombreImagen_2 = 'foto 2' . '.' . $Foto_2->getClientOriginalExtension();
        $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
        $Foto_2->move($RutaImagen, $NombreImagen_2);
    
        // Foto 3
        $Foto_3 = $req->file('foto_3');
        $NombreImagen_3 = 'foto 3' . '.' . $Foto_3->getClientOriginalExtension();
        $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
        $Foto_3->move($RutaImagen, $NombreImagen_3);
    
        // Foto 4
        $Foto_4 = $req->file('foto_4');
        $NombreImagen_4 = 'foto 4' . '.' . $Foto_4->getClientOriginalExtension();
        $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
        $Foto_4->move($RutaImagen, $NombreImagen_4);
    
        $Inmueble = New Inmueble;
        $Inmueble->foto_1 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_1;
        $Inmueble->foto_2 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_2;
        $Inmueble->foto_3 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_3;
        $Inmueble->foto_4 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_4;
        $Inmueble->tipo = $req->tipo_inmueble;
        $Inmueble->titulo = $req->titulo;
        $Inmueble->calle = $req->calle;
        $Inmueble->numero = $req->numero;
        $Inmueble->barrio = $req->barrio;
        $Inmueble->superficie = $req->superficie;
        $Inmueble->capacidad = $req->capacidad;
        $Inmueble->provincia = $req->provincia;
        $Inmueble->localidad = $req->localidad;
        $Inmueble->barra_tragos = $req->barra_tragos;
        $Inmueble->catering = $req->catering;
        $Inmueble->dj = $req->dj;
        $Inmueble->mesas_sillas = $req->mesas_sillas;
        $Inmueble->mesa_dulce = $req->mesa_dulce;
        $Inmueble->guardarropas = $req->guardarropas;
        $Inmueble->mozos_camareras = $req->mozos_camareras;
        $Inmueble->proyector_pantalla = $req->proyector_pantalla;
        $Inmueble->recepcion = $req->recepcion;
        $Inmueble->vajillas = $req->vajillas;
        $Inmueble->wifi = $req->wifi;
        $Inmueble->piscina = $req->piscina;
        $Inmueble->precio = $req->precio;
        $Inmueble->precio_a_convenir = $req->precio_a_convenir;
        $Inmueble->id_categoria = $req->id_categoria;
        $Inmueble->id_prestador = $id_Prestador;
        $Inmueble->fecha_publicacion = $FechaPublicacion;
        $Inmueble->save();
    
        //Cambiar para que retorne un mensaje de éxito
        return redirect()->route('Principal');
      }

      public function MostrarInmueble(Request $req) {

        $Inmueble = Inmueble::where('id',$req->id_inmueble)->where('id_categoria',$req->id_categoria)
                            ->select('*')
                            ->first();
        
        $Prestador = Prestador::where('id', $Inmueble->id_prestador)
                                ->select('*')
                                ->first();

        //Traer todas las preguntas
        $PreguntasInmueble = PreguntaInmueble::where('id_prestador',$Prestador->id)
                                              ->where('id_inmueble',$Inmueble->id)
                                              ->select('*')
                                              ->orderBy('created_at', 'DESC')
                                              ->get();
        
        //Traer todas las opiniones
        $OpinionesInmueble = OpinionInmueble::where('id_prestador',$Prestador->id)
                                            ->where('id_inmueble',$Inmueble->id)
                                            ->join('clientes','opinion_inmuebles.id_cliente','=','clientes.id')
                                            ->join('users','clientes.user_id','=','users.id')
                                            ->select('*')
                                            ->orderBy('opinion_inmuebles.created_at', 'DESC')
                                            ->get();

        //Contar numero de opiniones para mostrar
        $CantidadOpiniones = $OpinionesInmueble->count();

        //Traer Cliente logueado
        if (Auth::user()) {
          $user_id = Auth::user()->id;
  
          $Cliente = Cliente::where('user_id', $user_id)
                            ->select('*')
                            ->first();
          //dd($Cliente);
          return view('Ecommerce.Articulos.Detalles.Inmuebles.articulo_inmueble',[ 'Inmueble' => $Inmueble, 'Prestador' => $Prestador, 'PreguntasInmueble' => $PreguntasInmueble, 'OpinionesInmueble' => $OpinionesInmueble, 'CantidadOpiniones' => $CantidadOpiniones, 'Cliente' => $Cliente ]);
        }
        
        return view('Ecommerce.Articulos.Detalles.Inmuebles.articulo_inmueble',[ 'Inmueble' => $Inmueble, 'Prestador' => $Prestador, 'PreguntasInmueble' => $PreguntasInmueble, 'OpinionesInmueble' => $OpinionesInmueble, 'CantidadOpiniones' => $CantidadOpiniones ]);

      }

      public function PublicarPregunta(Request $req){
        
        $Pregunta = New PreguntaInmueble;
        $Pregunta->id_prestador = $req->id_prestador;
        $Pregunta->id_inmueble = $req->id_inmueble;
        $Pregunta->id_cliente = $req->id_cliente;
        $Pregunta->pregunta = $req->textarea_pregunta;
        $Pregunta->save();

        return 'Pregunta realizada';

      }

      public function ActualizarPreguntasAjax(Request $req){

        $ActualizarPreguntas = PreguntaInmueble::where('id_prestador',$req->id_prestador)
                                              ->where('id_inmueble',$req->id_inmueble)
                                              ->select('*')
                                              ->orderBy('created_at', 'DESC')
                                              ->get();

        return $ActualizarPreguntas;
      }

      
      public function AgregarAlCarrito(Request $req){
        //Comprobar que si el servicio ya existe en el carrito
        $ComprobarItemsAgregados = Carrito::where( 'id_cliente' , $req->id_cliente )
                                          ->where( 'id_inmueble' , $req->id_inmueble )
                                          ->first();

        if( $ComprobarItemsAgregados != null ){
          return 'Existe';
          
        }else{

          $Carrito = new Carrito;
          $Carrito->id_cliente = $req->id_cliente;
          $Carrito->id_inmueble = $req->id_inmueble;
          $Carrito->id_juego = null;
          $Carrito->id_animacion = null;
          $Carrito->id_mobiliario = null;
          $Carrito->id_catering = null;
          $Carrito->id_musicaDj = null;
          $Carrito->total = null;
          $Carrito->save();

          return 'Agregado';
        }


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
                //dd($InmuebleAgregado);
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

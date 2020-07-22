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
use App\PreguntaAnimacion;
use App\OpinionAnimacion;
use App\Carrito;

class AnimacionController extends Controller
{ 
      public function FormularioAnimacion() {
        //Traer Provincias y Localidades
        $path = storage_path() . "/json/ProvinciasLocalidades.json";
        $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
        return view('Ecommerce.Formularios_Publicacion.animacion',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
      }
    
      public function PublicarAnimacion(Request $req){
            $user_id = Auth::user()->id;
            $id_Prestador = Prestador::where('user_id',$user_id)->pluck('id')->first();
            $Empresa = Prestador::where('user_id',$user_id)->first();
            $Categoria = Categoria::find($req->id_categoria);
            $FechaPublicacion = date('Y-m-d');
            

            // Foto 1
            $Foto_1 = $req->file('foto_1');
            $NombreImagen_1 = 'foto 1' . '.' . $Foto_1->getClientOriginalExtension();
            $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo);
            $Foto_1->move($RutaImagen, $NombreImagen_1);

            // Foto 2
            $Foto_2 = $req->file('foto_2');
            $NombreImagen_2 = 'foto 2' . '.' . $Foto_1->getClientOriginalExtension();
            $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo);
            $Foto_2->move($RutaImagen, $NombreImagen_2);

            // Foto 3
            $Foto_3 = $req->file('foto_3');
            $NombreImagen_3 = 'foto 3' . '.' . $Foto_1->getClientOriginalExtension();
            $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo);
            $Foto_3->move($RutaImagen, $NombreImagen_3);

            // Foto 4
            $Foto_4 = $req->file('foto_4');
            $NombreImagen_4 = 'foto 4' . '.' . $Foto_1->getClientOriginalExtension();
            $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo);
            $Foto_4->move($RutaImagen, $NombreImagen_4);

            $Animacion = new Animacion;
            $Animacion->foto_1 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_1;
            $Animacion->foto_2 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_2;
            $Animacion->foto_3 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_3;
            $Animacion->foto_4 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_4;
            $Animacion->titulo = $req->titulo;
            $Animacion->cant_animadores = $req->cantidad_animadores;
            $Animacion->años_experiencia = $req->años_experiencia;
            $Animacion->edades = $req->edades;
            $Animacion->descripcion = $req->descripcion;
            $Animacion->magos = $req->magos;
            $Animacion->maquillaje = $req->maquillaje;
            $Animacion->karaoke = $req->karaoke;
            $Animacion->payasos = $req->payasos;
            $Animacion->personajes = $req->personajes;
            $Animacion->titeres = $req->titeres;
            $Animacion->globologia = $req->globologia;
            $Animacion->robot_led = $req->robot_led;
            $Animacion->maquillaje_fluor = $req->maquillaje_fluor;
            $Animacion->precio = $req->precio;
            $Animacion->precio_a_convenir = $req->precio_a_convenir;
            $Animacion->id_categoria = $req->id_categoria;
            $Animacion->id_prestador = $id_Prestador;
            $Animacion->fecha_publicacion = $FechaPublicacion;
            $Animacion->save();
            return redirect()->route('Principal');
      }

      public function MostrarAnimacion(Request $req) {

            $Animacion = Animacion::where('id',$req->id_animacion)->where('id_categoria',$req->id_categoria)
                              ->select('*')
                              ->first();
            
            $Prestador = Prestador::where('id', $Animacion->id_prestador)
                                    ->select('*')
                                    ->first();

            //Traer todas las preguntas
            $PreguntasAnimacion = PreguntaAnimacion::where('id_prestador',$Prestador->id)
                                                ->where('id_animacion',$Animacion->id)
                                                ->select('*')
                                                ->orderBy('created_at', 'DESC')
                                                ->get();
            
            //Traer todas las opiniones
            $OpinionesAnimacion = OpinionAnimacion::where('id_prestador',$Prestador->id)
                                                ->where('id_animacion',$Animacion->id)
                                                ->join('clientes','opinion_animacions.id_cliente','=','clientes.id')
                                                ->join('users','clientes.user_id','=','users.id')
                                                ->select('*')
                                                ->orderBy('opinion_animacions.created_at', 'DESC')
                                                ->get();

            //Contar numero de opiniones para mostrar
            $CantidadOpiniones = $OpinionesAnimacion->count();

            //Traer Cliente logueado
            if (Auth::user()) {
            $user_id = Auth::user()->id;
      
            $Cliente = Cliente::where('user_id', $user_id)
                              ->select('*')
                              ->first();
            //dd($Cliente);
            return view('Ecommerce.Articulos.Detalles.Animacion.articulo_animacion',[ 'Animacion' => $Animacion, 'Prestador' => $Prestador, 'PreguntasAnimacion' => $PreguntasAnimacion, 'OpinionesAnimacion' => $OpinionesAnimacion, 'CantidadOpiniones' => $CantidadOpiniones, 'Cliente' => $Cliente ]);
            }
            
            return view('Ecommerce.Articulos.Detalles.Animacion.articulo_animacion',[ 'Animacion' => $Animacion, 'Prestador' => $Prestador, 'PreguntasAnimacion' => $PreguntasAnimacion, 'OpinionesAnimacion' => $OpinionesAnimacion, 'CantidadOpiniones' => $CantidadOpiniones ]);

      }

      public function PublicarPregunta(Request $req){
            
            $Pregunta = New PreguntaAnimacion;
            $Pregunta->id_prestador = $req->id_prestador;
            $Pregunta->id_animacion = $req->id_animacion;
            $Pregunta->id_cliente = $req->id_cliente;
            $Pregunta->pregunta = $req->textarea_pregunta;
            $Pregunta->save();

            return 'Pregunta realizada';

      }
  
      public function ActualizarPreguntasAjax(Request $req){

            $ActualizarPreguntas = PreguntaAnimacion::where('id_prestador',$req->id_prestador)
                                                ->where('id_animacion',$req->id_animacion)
                                                ->select('*')
                                                ->orderBy('created_at', 'DESC')
                                                ->get();

            return $ActualizarPreguntas;
      }
      
      public function AgregarAlCarrito(Request $req){

            //Comprobar que si el servicio ya existe en el carrito
            $ComprobarItemsAgregados = Carrito::where( 'id_cliente' , $req->id_cliente )
                                          ->where( 'id_animacion' , $req->id_animacion )
                                          ->first();

            if( $ComprobarItemsAgregados != null ){
            return 'Existe';
            
            }else{

            $Carrito = new Carrito;
            $Carrito->id_cliente = $req->id_cliente;
            $Carrito->id_Inmueble = null;
            $Carrito->id_juego = null;
            $Carrito->id_animacion = $req->id_animacion;
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
                  case $carrito->id_Juego != null:
                  $JuegoAgregado = Juego::find($carrito->id_Juego);
                  array_push( $ServiciosCarrito , $JuegoAgregado );
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

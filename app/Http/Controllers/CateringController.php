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
use App\PreguntaCatering;
use App\OpinionCatering;
use App\Carrito;

class CateringController extends Controller
{
    public function FormularioCatering(){
        //Traer Provincias y Localidades
        $path = storage_path() . "/json/ProvinciasLocalidades.json";
        $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
        return view('Ecommerce.Formularios_Publicacion.catering',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
      }
    
    public function PublicarCatering(Request $req){
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
      $NombreImagen_2 = 'foto 2' . '.' . $Foto_2->getClientOriginalExtension();
      $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo);
      $Foto_2->move($RutaImagen, $NombreImagen_2);
  
      // Foto 3
      $Foto_3 = $req->file('foto_3');
      $NombreImagen_3 = 'foto 3' . '.' . $Foto_3->getClientOriginalExtension();
      $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo);
      $Foto_3->move($RutaImagen, $NombreImagen_3);
  
      // Foto 4
      $Foto_4 = $req->file('foto_4');
      $NombreImagen_4 = 'foto 4' . '.' . $Foto_4->getClientOriginalExtension();
      $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo);
      $Foto_4->move($RutaImagen, $NombreImagen_4);
  
      $Catering = new Catering;
      $Catering->foto_1 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_1;
      $Catering->foto_2 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_2;
      $Catering->foto_3 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_3;
      $Catering->foto_4 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_4;
      $Catering->titulo =  $req->titulo;
      $Catering->descripcion =  $req->descripcion;
      $Catering->cantidad_invitados = $req->cantidad_invitados;
      $Catering->servicio_pizza = $req->servicio_pizza;
      $Catering->mesa_dulce = $req->mesa_dulce;
      $Catering->pernil = $req->pernil;
      $Catering->coffee_break = $req->coffee_break;
      $Catering->servicio_lunch = $req->servicio_lunch;
      $Catering->servicio_gourmet = $req->servicio_gourmet;
      $Catering->provincia = $req->provincia;
      $Catering->localidad = $req->localidad;
      $Catering->id_categoria = $req->id_categoria;
      $Catering->id_prestador = $id_Prestador;
      $Catering->fecha_publicacion = $FechaPublicacion;
      $Catering->save();
  
      return redirect()->route('Principal');
    }

    public function MostrarCatering(Request $req) {

      $Catering = Catering::where('id',$req->id_catering)->where('id_categoria',$req->id_categoria)
                        ->select('*')
                        ->first();
      
      $Prestador = Prestador::where('id', $Catering->id_prestador)
                              ->select('*')
                              ->first();

      //Traer todas las preguntas
      $PreguntasCatering = PreguntaCatering::where('id_prestador',$Prestador->id)
                                          ->where('id_catering',$Catering->id)
                                          ->select('*')
                                          ->orderBy('created_at', 'DESC')
                                          ->get();
      
      //Traer todas las opiniones
      $OpinionesCatering = OpinionCatering::where('id_prestador',$Prestador->id)
                                          ->where('id_catering',$Catering->id)
                                          ->join('clientes','opinion_caterings.id_cliente','=','clientes.id')
                                          ->join('users','clientes.user_id','=','users.id')
                                          ->select('*')
                                          ->orderBy('opinion_caterings.created_at', 'DESC')
                                          ->get();

      //Contar numero de opiniones para mostrar
      $CantidadOpiniones = $OpinionesCatering->count();

      //Traer Cliente logueado
      if (Auth::user()) {
      $user_id = Auth::user()->id;

      $Cliente = Cliente::where('user_id', $user_id)
                        ->select('*')
                        ->first();
      //dd($Cliente);
      return view('Ecommerce.Articulos.Detalles.Catering.articulo_catering',[ 'Catering' => $Catering, 'Prestador' => $Prestador, 'PreguntasCatering' => $PreguntasCatering, 'OpinionesCatering' => $OpinionesCatering, 'CantidadOpiniones' => $CantidadOpiniones, 'Cliente' => $Cliente ]);
      }
      
      return view('Ecommerce.Articulos.Detalles.Catering.articulo_catering',[ 'Catering' => $Catering, 'Prestador' => $Prestador, 'PreguntasCatering' => $PreguntasCatering, 'OpinionesCatering' => $OpinionesCatering, 'CantidadOpiniones' => $CantidadOpiniones ]);

    }

    public function PublicarPregunta(Request $req){
        
        $Pregunta = New PreguntaCatering;
        $Pregunta->id_prestador = $req->id_prestador;
        $Pregunta->id_catering = $req->id_catering;
        $Pregunta->id_cliente = $req->id_cliente;
        $Pregunta->pregunta = $req->textarea_pregunta;
        $Pregunta->save();

        return 'Pregunta realizada';

    }

    public function ActualizarPreguntasAjax(Request $req){

        $ActualizarPreguntas = PreguntaCatering::where('id_prestador',$req->id_prestador)
                                            ->where('id_catering',$req->id_catering)
                                            ->select('*')
                                            ->orderBy('created_at', 'DESC')
                                            ->get();

        return $ActualizarPreguntas;
    }

    public function AgregarAlCarrito(Request $req){

        //Comprobar que si el servicio ya existe en el carrito
        $ComprobarItemsAgregados = Carrito::where( 'id_cliente' , $req->id_cliente )
                                      ->where( 'id_catering' , $req->id_catering )
                                      ->first();

        if( $ComprobarItemsAgregados != null ){
          return 'Existe';
        
        }else{

        $Carrito = new Carrito;
        $Carrito->id_cliente = $req->id_cliente;
        $Carrito->id_Inmueble = null;
        $Carrito->id_juego = null;
        $Carrito->id_animacion = null;
        $Carrito->id_mobiliario = null;
        $Carrito->id_catering = $req->id_catering;
        $Carrito->id_musicaDj = null;
        $Carrito->total = null;
        $Carrito->save();

        return 'Agregado';
        }


    }

}

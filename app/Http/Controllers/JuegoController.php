<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

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
use App\PreguntaJuego;
use App\OpinionJuego;

class JuegoController extends Controller
{
    public function FormularioJuegos(){
        //Traer Provincias y Localidades
        $path = storage_path() . "/json/ProvinciasLocalidades.json";
        $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
        return view('Ecommerce.Formularios_Publicacion.juegos',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
      }
    
      public function PublicarJuegos(Request $req){

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
    
    
        $Juego = new Juego;
        $Juego->foto_1 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_1;
        $Juego->foto_2 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_2;
        $Juego->foto_3 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_3;
        $Juego->foto_4 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_4;
        $Juego->titulo = $req->titulo;
        $Juego->descripcion = $req->descripcion;
        $Juego->precio = $req->precio;
        $Juego->precio_a_convenir = $req->precio_a_convenir;
        $Juego->provincia = $req->provincia;
        $Juego->localidad = $req->localidad;
        $Juego->fecha_publicacion = $FechaPublicacion;
        $Juego->id_categoria = $req->id_categoria;
        $Juego->id_prestador = $id_Prestador;
        $Juego->save();
        return redirect()->route('FormularioJuegos');
      }

      public function MostrarJuego(Request $req) {
        
        $Juego = Juego::where('id',$req->id_juego)->where('id_categoria',$req->id_categoria)
                            ->select('*')
                            ->first();
        
        $Prestador = Prestador::where('id', $Juego->id_prestador)
                                ->select('*')
                                ->first();

        //Traer todas las preguntas
        $PreguntasJuego = PreguntaJuego::where('id_prestador',$Prestador->id)
                                              ->where('id_juego',$Juego->id)
                                              ->select('*')
                                              ->orderBy('created_at', 'DESC')
                                              ->get();
        
        //Traer todas las opiniones
        $OpinionesJuego = OpinionJuego::where('id_prestador',$Prestador->id)
                                            ->where('id_juego',$Juego->id)
                                            ->join('clientes','opinion_juegos.id_cliente','=','clientes.id')
                                            ->join('users','clientes.user_id','=','users.id')
                                            ->select('*')
                                            ->orderBy('opinion_juegos.created_at', 'DESC')
                                            ->get();
        
        //dd($OpinionesJuego);

        //Contar numero de opiniones para mostrar
        $CantidadOpiniones = $OpinionesJuego->count();

        //Traer Cliente logueado
        if (Auth::user()) {
          $user_id = Auth::user()->id;
  
          $Cliente = Cliente::where('user_id', $user_id)
                            ->select('*')
                            ->first();
          //dd($Cliente);
          return view('Ecommerce.Articulos.Detalles.Juegos.articulo_Juego',[ 'Juego' => $Juego, 'Prestador' => $Prestador, 'PreguntasJuego' => $PreguntasJuego, 'OpinionesJuego' => $OpinionesJuego, 'CantidadOpiniones' => $CantidadOpiniones, 'Cliente' => $Cliente ]);
        }
        
        return view('Ecommerce.Articulos.Detalles.Juegos.articulo_Juego',[ 'Juego' => $Juego, 'Prestador' => $Prestador, 'PreguntasJuego' => $PreguntasJuego, 'OpinionesJuego' => $OpinionesJuego, 'CantidadOpiniones' => $CantidadOpiniones ]);

      }

      public function PublicarPregunta(Request $req){
        
        $Pregunta = New PreguntaJuego;
        $Pregunta->id_prestador = $req->id_prestador;
        $Pregunta->id_juego = $req->id_juego;
        $Pregunta->id_cliente = $req->id_cliente;
        $Pregunta->pregunta = $req->textarea_pregunta;
        $Pregunta->save();

        return 'Pregunta realizada';

      }

      public function ActualizarPreguntasAjax(Request $req){

        $ActualizarPreguntas = PreguntaJuego::where('id_prestador',$req->id_prestador)
                                              ->where('id_juego',$req->id_juego)
                                              ->select('*')
                                              ->orderBy('created_at', 'DESC')
                                              ->get();

        return $ActualizarPreguntas;
      }



}

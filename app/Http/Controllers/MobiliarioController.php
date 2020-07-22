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
use App\PreguntaMobiliario;
use App\OpinionMobiliario;
use App\Carrito;

class MobiliarioController extends Controller
{
    public function FormularioMobiliario(){
        //Traer Provincias y Localidades
        $path = storage_path() . "/json/ProvinciasLocalidades.json";
        $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
        return view('Ecommerce.Formularios_Publicacion.mobiliario',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
    }
    
    public function PublicarMobiliario(Request $req){
  
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
  
      $Mobiliario = new Mobiliario;
      $Mobiliario->foto_1 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_1;
      $Mobiliario->foto_2 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_2;
      $Mobiliario->foto_3 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_3;
      $Mobiliario->foto_4 = '/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->titulo . '/' . $NombreImagen_4;
      $Mobiliario->titulo = $req->titulo;
      $Mobiliario->capacidad = $req->capacidad;
      $Mobiliario->tipo = $req->tipo;
      $Mobiliario->sillones = $req->sillones;
      $Mobiliario->puf = $req->puf;
      $Mobiliario->mesas = $req->mesas;
      $Mobiliario->puf_luminoso = $req->puf_luminoso;
      $Mobiliario->gazebos = $req->gazebos;
      $Mobiliario->carpas = $req->carpas;
      $Mobiliario->caminos = $req->caminos;
      $Mobiliario->fanales = $req->fanales;
      $Mobiliario->farolas = $req->farolas;
      $Mobiliario->biombo = $req->biombo;
      $Mobiliario->mini_living = $req->mini_living;
      $Mobiliario->lamparas_vintage = $req->lamparas_vintage;
      $Mobiliario->camastro = $req->camastro;
      $Mobiliario->puf_redondo = $req->puf_redondo;
      $Mobiliario->isla_circular = $req->isla_circular;
      $Mobiliario->descripcion = $req->descripcion;
      $Mobiliario->provincia = $req->provincia;
      $Mobiliario->localidad = $req->localidad;
      $Mobiliario->precio = $req->precio;
      $Mobiliario->precio_a_convenir = $req->precio_a_convenir;
      $Mobiliario->id_categoria = $req->id_categoria;
      $Mobiliario->id_prestador = $id_Prestador;
      $Mobiliario->fecha_publicacion = $FechaPublicacion;
      $Mobiliario->save();
      return redirect()->route('Principal');
    }

    public function MostrarMobiliario(Request $req) {

      $Mobiliario = Mobiliario::where('id',$req->id_mobiliario)->where('id_categoria',$req->id_categoria)
                        ->select('*')
                        ->first();

      $Prestador = Prestador::where('id', $Mobiliario->id_prestador)
                              ->select('*')
                              ->first();

      //Traer todas las preguntas
      $PreguntasMobiliario = PreguntaMobiliario::where('id_prestador',$Prestador->id)
                                          ->where('id_mobiliario',$Mobiliario->id)
                                          ->select('*')
                                          ->orderBy('created_at', 'DESC')
                                          ->get();
      
      //Traer todas las opiniones
      $OpinionesMobiliario = OpinionMobiliario::where('id_prestador',$Prestador->id)
                                          ->where('id_mobiliario',$Mobiliario->id)
                                          ->join('clientes','opinion_mobiliarios.id_cliente','=','clientes.id')
                                          ->join('users','clientes.user_id','=','users.id')
                                          ->select('*')
                                          ->orderBy('opinion_mobiliarios.created_at', 'DESC')
                                          ->get();

      //Contar numero de opiniones para mostrar
      $CantidadOpiniones = $OpinionesMobiliario->count();

      //Traer Cliente logueado
      if (Auth::user()) {
      $user_id = Auth::user()->id;

      $Cliente = Cliente::where('user_id', $user_id)
                        ->select('*')
                        ->first();
      //dd($Cliente);
      return view('Ecommerce.Articulos.Detalles.Mobiliario.articulo_mobiliario',[ 'Mobiliario' => $Mobiliario, 'Prestador' => $Prestador, 'PreguntasMobiliario' => $PreguntasMobiliario, 'OpinionesMobiliario' => $OpinionesMobiliario, 'CantidadOpiniones' => $CantidadOpiniones, 'Cliente' => $Cliente ]);
      }
      
      return view('Ecommerce.Articulos.Detalles.Mobiliario.articulo_mobiliario',[ 'Mobiliario' => $Mobiliario, 'Prestador' => $Prestador, 'PreguntasMobiliario' => $PreguntasMobiliario, 'OpinionesMobiliario' => $OpinionesMobiliario, 'CantidadOpiniones' => $CantidadOpiniones ]);

}

    public function AgregarAlCarrito(Request $req){

      //Comprobar que si el servicio ya existe en el carrito
      $ComprobarItemsAgregados = Carrito::where( 'id_cliente' , $req->id_cliente )
                                    ->where( 'id_mobiliario' , $req->id_mobiliario )
                                    ->first();

      if( $ComprobarItemsAgregados != null ){
      return 'Existe';
      
      }else{

      $Carrito = new Carrito;
      $Carrito->id_cliente = $req->id_cliente;
      $Carrito->id_Inmueble = null;
      $Carrito->id_juego = null;
      $Carrito->id_mobiliario = null;
      $Carrito->id_mobiliario = $req->id_mobiliario;
      $Carrito->id_catering = null;
      $Carrito->id_musicaDj = null;
      $Carrito->total = null;
      $Carrito->save();

      return 'Agregado';
      }


    }


    
    
}

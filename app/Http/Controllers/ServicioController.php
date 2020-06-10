<?php

namespace App\Http\Controllers;

use Auth;
use App\Servicio;
use App\Inmueble;
use App\Prestador;
use App\Categoria;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function Publicar(){
      return view('Ecommerce.publicar');
}

  public function ServiciosPublicados(){
    $Categorias = Categoria::all();
    $Inmuebles = Inmueble::all();
    return view('Ecommerce.servicios_publicados',['Categorias'=>$Categorias, 'Inmuebles'=>$Inmuebles]);
  }

/*
==========================
  Inmuebles
==========================
*/

  public function FormularioInmueble(){
    //Traer Provincias y Localidades
    $path = storage_path() . "/json/ProvinciasLocalidades.json";
    $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
    return view('Ecommerce.Formularios_Publicacion.inmuebles',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
  }

  public function PublicarInmueble(Request $req){

    $user_id = Auth::user()->id;
    $id_Prestador = Prestador::where('user_id',$user_id)->first();
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
    $NombreImagen_2 = 'foto 2' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_2->move($RutaImagen, $NombreImagen_2);

    // Foto 3
    $Foto_3 = $req->file('foto_3');
    $NombreImagen_3 = 'foto 3' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_3->move($RutaImagen, $NombreImagen_3);

    // Foto 4
    $Foto_4 = $req->file('foto_4');
    $NombreImagen_4 = 'foto 4' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_4->move($RutaImagen, $NombreImagen_4);

    $Inmueble = New Inmueble;
    $Inmueble->foto_1 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_1;
    $Inmueble->foto_2 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_2;
    $Inmueble->foto_3 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_3;
    $Inmueble->foto_4 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_4;
    $Inmueble->tipo = $req->tipo_inmueble;
    $Inmueble->nombre = $req->nombre;
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
    $Inmueble->id_categoria = $req->id_categoria;
    $Inmueble->precio = $req->precio;
    $Inmueble->precio_a_convenir = $req->precio_a_convenir;
    $Inmueble->fecha_publicacion = $FechaPublicacion;
    $Inmueble->id_prestador = $id_Prestador;
    $Inmueble->save();

    //Cambiar para que retorne un mensaje de éxito
    return redirect()->route('Principal');
  }

/*
==========================
  Juegos
==========================
*/
  public function FormularioJuegos(){
    //Traer Provincias y Localidades
    $path = storage_path() . "/json/ProvinciasLocalidades.json";
    $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
    return view('Ecommerce.Formularios_Publicacion.juegos',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
  }

  public function PublicarJuegos(Request $req){
    dd($req);
    $user_id = Auth::user()->id;
    $id_Prestador = Prestador::where('user_id', $user_id)->first();
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
    $NombreImagen_2 = 'foto 2' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_2->move($RutaImagen, $NombreImagen_2);

    // Foto 3
    $Foto_3 = $req->file('foto_3');
    $NombreImagen_3 = 'foto 3' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_3->move($RutaImagen, $NombreImagen_3);

    // Foto 4
    $Foto_4 = $req->file('foto_4');
    $NombreImagen_4 = 'foto 4' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_4->move($RutaImagen, $NombreImagen_4);


    $Juego = new Juego;
    $Juego->foto_1 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_1;
    $Juego->foto_2 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_2;
    $Juego->foto_3 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_3;
    $Juego->foto_4 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_4;
    $Juego->titulo = $req->titulo;
    $Juego->descripcion = $req->descripcion;
    $Juego->precio = $req->precio;
    $Juego->precio_a_convenir = $req->precio_a_convenir;
    $Juego->provincia = $req->provincia;
    $Juego->localidad = $req->localidad;
    $Juego->fecha_publicacion = $FechaPublicacion;
    $Juego->id_prestador = $id_Prestador;
    $Juego->save();
    return redirect()->route('Principal');
  }

  /*
  ==========================
    Animación
  ==========================
  */
  public function FormularioAnimacion(){
    //Traer Provincias y Localidades
    $path = storage_path() . "/json/ProvinciasLocalidades.json";
    $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
    return view('Ecommerce.Formularios_Publicacion.animacion',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
  }

  public function PublicarAnimacion(){
    $user_id = Auth::user()->id;
    $id_Prestador = Prestador::where('user_id', $user_id)->first();
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
    $NombreImagen_2 = 'foto 2' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_2->move($RutaImagen, $NombreImagen_2);

    // Foto 3
    $Foto_3 = $req->file('foto_3');
    $NombreImagen_3 = 'foto 3' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_3->move($RutaImagen, $NombreImagen_3);

    // Foto 4
    $Foto_4 = $req->file('foto_4');
    $NombreImagen_4 = 'foto 4' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_4->move($RutaImagen, $NombreImagen_4);

    $Animacion = new Animacion;
    $Animacion->foto_1 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_1;
    $Animacion->foto_2 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_2;
    $Animacion->foto_3 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_3;
    $Animacion->foto_4 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_4;
    $Animacion->titulo = $req->titulo;
    $Animacion->cant_animadores = $req->cant_animadores;
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
    $Animacion->id_categoria = $req->id_categoria;
    $Animacion->prestador_id = $id_Prestador;
    $Animacion->fecha_publicacion = $FechaPublicacion;
    $Animacion->save();
    return redirect()->route('Principal');

  }

  /*
  ==========================
    Mobiliario
  ==========================
  */
  public function FormularioMobiliario(){
    //Traer Provincias y Localidades
    $path = storage_path() . "/json/ProvinciasLocalidades.json";
    $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
    return view('Ecommerce.Formularios_Publicacion.mobiliario',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
  }

  public function PublicarMobiliario(){

    $user_id = Auth::user()->id;
    $id_Prestador = Prestador::where('user_id', $user_id)->first();
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
    $NombreImagen_2 = 'foto 2' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_2->move($RutaImagen, $NombreImagen_2);

    // Foto 3
    $Foto_3 = $req->file('foto_3');
    $NombreImagen_3 = 'foto 3' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_3->move($RutaImagen, $NombreImagen_3);

    // Foto 4
    $Foto_4 = $req->file('foto_4');
    $NombreImagen_4 = 'foto 4' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_4->move($RutaImagen, $NombreImagen_4);

    $Mobiliario = new Mobiliario;
    $Mobiliario->foto_1 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_1;
    $Mobiliario->foto_2 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_2;
    $Mobiliario->foto_3 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_3;
    $Mobiliario->foto_4 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_4;
    $Mobiliario->titulo = $req->titulo;
    $Mobiliario->capacidad = $req->capacidad;
    $Mobiliario->titulo = $req->titulo;
    $Mobiliario->capacidad = $req->capacidad;
    $Mobiliario->tipo = $req->tipo;
    $Mobiliario->sillones = $req->sillones;
    $Mobiliario->puf = $req->puf;
    $Mobiliario->mesas = $req->mesas;
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
    $Mobiliario->save();
  }

  /*
  ==========================
    Catering
  ==========================
  */

  public function FormularioCatering(){
    //Traer Provincias y Localidades
    $path = storage_path() . "/json/ProvinciasLocalidades.json";
    $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
    return view('Ecommerce.Formularios_Publicacion.catering',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
    
  }

  // public function FormularioIluminacion(){
  //
  //   return view('Ecommerce.Formularios_Publicacion.iluminacion');
  // }

  // public function FormularioOrnamentacion(){
  //
  //   return view('Ecommerce.Formularios_Publicacion.ornamentacion');
  // }

  public function FormularioMusicaDj(){

    return view('Ecommerce.Formularios_Publicacion.musicaDj');
  }

  // public function FormularioShows(){
  //
  //   return view('Ecommerce.Formularios_Publicacion.shows');
  // }

  public function MostrarPlanes(){
    return view('Ecommerce.planes_publicidad');
  }

  public function Detalles(){
    return view('Ecommerce.articulo_detalle');
  }

}

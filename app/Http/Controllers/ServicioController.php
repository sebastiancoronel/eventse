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
    return view('Ecommerce.servicios_publicados');
  }

/*
=============
  Inmuebles
=============
*/

  public function FormularioInmueble(){
    //Traer Provincias y Localidades
    $path = storage_path() . "/json/ProvinciasLocalidades.json";
    $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
    return view('Ecommerce.Formularios_Publicacion.inmuebles',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
  }

  public function PublicarInmueble(Request $req){
    //dd($req);
    $user_id = Auth::user()->id;

    $Empresa = Prestador::where('user_id',$user_id)->first();
    $Categoria = Categoria::find($req->id_categoria);
    $FechaPublicacion = date('Y-m-d');

    $Foto_1 = $req->file('foto_1');
    $NombreImagen_1 = 'foto 1' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_1->move($RutaImagen, $NombreImagen_1);

    $Foto_2 = $req->file('foto_2');
    $NombreImagen_2 = 'foto 2' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_2->move($RutaImagen, $NombreImagen_2);

    $Foto_3 = $req->file('foto_3');
    $NombreImagen_3 = 'foto 3' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_3->move($RutaImagen, $NombreImagen_3);

    $Foto_4 = $req->file('foto_4');
    $NombreImagen_4 = 'foto 4' . '.' . $Foto_1->getClientOriginalExtension();
    $RutaImagen = public_path('/images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre);
    $Foto_4->move($RutaImagen, $NombreImagen_4);

    $Inmueble = New Inmueble;
    $Inmueble->foto_1 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . 'foto 1';
    $Inmueble->foto_2 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . 'foto 2';
    $Inmueble->foto_3 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . 'foto 3';
    $Inmueble->foto_4 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . 'foto 4';
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
    $Inmueble->save();

  }

/*
=============
  Juegos
=============
*/
  public function FormularioJuegos(){

    return view('Ecommerce.Formularios_Publicacion.juegos');
  }

  public function FormularioAnimacion(){

    return view('Ecommerce.Formularios_Publicacion.animacion');
  }

  public function FormularioMobiliario(){

    return view('Ecommerce.Formularios_Publicacion.mobiliario');
  }

  public function FormularioCatering(){

    return view('Ecommerce.Formularios_Publicacion.catering');
  }

  public function FormularioIluminacion(){

    return view('Ecommerce.Formularios_Publicacion.iluminacion');
  }

  public function FormularioOrnamentacion(){

    return view('Ecommerce.Formularios_Publicacion.ornamentacion');
  }

  public function FormularioMusicaDj(){

    return view('Ecommerce.Formularios_Publicacion.musicaDj');
  }

  public function FormularioShows(){

    return view('Ecommerce.Formularios_Publicacion.shows');
  }

  public function MostrarPlanes(){
    return view('Ecommerce.planes_publicidad');
  }

  public function Detalles(){
    return view('Ecommerce.articulo_detalle');
  }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobiliarioController extends Controller
{
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
    
}

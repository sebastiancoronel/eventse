<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
        $Catering = new Catering;
        $Catering->foto_1 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_1;
        $Catering->foto_2 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_2;
        $Catering->foto_3 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_3;
        $Catering->foto_4 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_4;
        $Catering->titulo =  $req->titulo;
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
        $Catering->id_prestador = $req->id_prestador;
        $Catering->fecha_publicacion = $FechaPublicacion;
        $Catering->save();
    
        return redirect()->route('Principal');
      }
}

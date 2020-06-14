<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MusicaDj;
use Auth;
use App\Prestador;
use App\Categoria;
class MusicaDjController extends Controller
{
    public function FormularioMusicaDj(){
        //Traer Provincias y Localidades
        $path = storage_path() . "/json/ProvinciasLocalidades.json";
        $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
        return view('Ecommerce.Formularios_Publicacion.musicaDj',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
      }
    
      public function PublicarMusicaDj(Request $req){
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
    
        $MusicaDj = new MusicaDj;
        $MusicaDj->foto_1 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_1;
        $MusicaDj->foto_2 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_2;
        $MusicaDj->foto_3 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_3;
        $MusicaDj->foto_4 = 'images/publicaciones/' . $Empresa->nombre . '/' . $Categoria->nombre . '/' . $FechaPublicacion . '/' . $req->nombre . '/' . $NombreImagen_4;
        $MusicaDj->titulo = $req->titulo;
        $MusicaDj->cumpleaños_infantiles = $req->cumpleaños_infantiles;
        $MusicaDj->cumpleaños_adultos = $req->cumpleaños_adultos;
        $MusicaDj->fiestas_tematicas = $req->fiestas_tematicas;
        $MusicaDj->comuniones = $req->comuniones;
        $MusicaDj->bodas_y_aniversarios = $req->bodas_y_aniversarios;
        $MusicaDj->musica_70 = $req->musica_70;
        $MusicaDj->musica_80 = $req->musica_80;
        $MusicaDj->musica_90 = $req->musica_90;
        $MusicaDj->musica_2000 = $req->musica_2000;
        $MusicaDj->clasicos = $req->clasicos;
        $MusicaDj->cumbia = $req->cumbia;
        $MusicaDj->cuarteto = $req->cuarteto;
        $MusicaDj->reggaeton = $req->reggaeton;
        $MusicaDj->bachata = $req->bachata;
        $MusicaDj->descripcion = $req->descripcion;
        $MusicaDj->provincia = $req->provincia;
        $MusicaDj->localidad = $req->localidad;
        $MusicaDj->precio = $req->precio;
        $MusicaDj->precio_a_convenir = $req->precio_a_convenir;
        $MusicaDj->id_categoria = $req->id_categoria;
        $MusicaDj->id_prestador = $req->id_prestador;
        $MusicaDj->fecha_publicacion = $FechaPublicacion;
        $MusicaDj->save();
       
        return redirect()->route('Principal');
      }
}

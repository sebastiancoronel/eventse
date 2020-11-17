<?php

namespace App\Http\Controllers;
use Auth;
use App\Prestador;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class PrestadorController extends Controller
{

  public function CrearPerfilEmpresa(){
    return view('Perfiles.Empresa.crear_perfil_empresa');
  }

  public function CrearPrestador(){
    
    return view('Principal.formulario_perfil_empresa');
  }

  public function AlmacenarPrestador(Request $request){
    
    $ImagenSubida = $request->file('foto');
    $NombreImagen = Auth::user()->id . '.' . $ImagenSubida->getClientOriginalExtension();
    $RutaImagen = public_path('/images/foto_perfil');
    $ImagenSubida->move($RutaImagen, $NombreImagen);

    $ExistePrestador = Prestador::where( 'user_id', Auth::user()->id)->select('id')->first();

    if ($ExistePrestador != null) {
      return redirect()->route('Principal')->with('PerfilExistente','Ya cuentas con un perfil de empresa');
    }else {
      $Prestador = new Prestador();
      $Prestador->nombre = $request->nombre;
      $Prestador->foto = '/images/foto_perfil/' . $NombreImagen;
      $Prestador->email = $request->email;
      $Prestador->telefono = $request->telefono;
      $Prestador->user_id = Auth::user()->id;
      $Prestador->save();
    }

    return redirect()->route('Publicar')->with('PerfilCreado','Ya puedes empezar a publicar');
  
  }

/*============================
              Menú
==============================*/
  public function Resumen(){
    return view('Perfiles.Empresa.Menu.resumen');
  }

  public function PreguntasRecibidas(){
    return view('Perfiles.Empresa.Menu.Preguntas.preguntas_recibidas');
  }

  public function MisAlquileres(){
    return view('Perfiles.Empresa.Menu.Alquileres_y_Reservas.mis_alquileres');
  }

/*============================
              Fin Menú
==============================*/
}

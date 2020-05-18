<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use app\User;
use app\PerfilEmpresa;
class PerfilEmpresaController extends Controller
{

  public function CrearPerfilEmpresa(){
    return view('Perfiles.Empresa.crear_perfil_empresa');
  }

  public function FormularioPerfilEmpresa(){
    $path = storage_path() . "/json/ProvinciasLocalidades.json";
    $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
    return view('Perfiles.Empresa.formulario_perfil_empresa',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
  }

  public function AlmacenarPerfilEmpresa(Request $request){
    dd($request);
    $extension = $request->file('foto')->getClientOriginalExtension();
    $file_name = $user->id . '.' . $extension;
    $user->foto = $extension;

    $Prestador = new Prestador();
    $Prestador->nombre;
    $Prestador->foto;
    $Prestador->provincia;
    $Prestador->localidad;
    $Prestador->direccion;
    $Prestador->email;
    $Prestador->telefono;
    $Prestador->id_categoria;
    $Prestador->id_empleados;
    $Prestador->id_servicios;
    $Prestador->user_id;
    $Prestador->save();


    return view('');
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

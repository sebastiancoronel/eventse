<?php

namespace App\Http\Controllers;
use Auth;
use App\Prestador;
use App\Prestador_por_Categoria;
use App\Cliente;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class PrestadorController extends Controller
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
    // dd($request->all());
    //Id del usuario como nombre de la imagen para que sea unica
    $user = Auth::user();
    $extension = $request->file('foto')->getClientOriginalExtension();
    $file_name = $user->id . '.' . $extension;
    //$user->foto = $extension;
    $ruta_imagen = $request->file('foto')->storeAs('public/users/perfil_empresa' , $file_name);

    $ExistePrestador = Prestador::where('user_id',$user->id)->select('id')->first();

    if ($ExistePrestador != null) {
      return redirect()->route('Principal')->with('PerfilExistente','Ya cuentas con un perfil de empresa');
    }else {
      $Prestador = new Prestador();
      $Prestador->nombre = $request->nombre;
      $Prestador->foto = $ruta_imagen;
      $Prestador->provincia = $request->provincia;
      $Prestador->localidad = $request->localidad;
      $Prestador->direccion = $request->direccion;
      $Prestador->email = $request->email;
      $Prestador->telefono = $request->telefono;
      $Prestador->user_id = $request->user_id;
      $Prestador->save();
    }

    $PrestadorGuardado = Prestador::where('user_id',$user->id)->select('id')->first();


    $ExistePrestador_por_Categoria = Prestador_por_Categoria::where('id_prestador',$user->id)->select('id')->first();

    if ($ExistePrestador_por_Categoria != null) {
      //return view('Ecommerce.welcome')->with('PerfilExistente','Ya tienes un perfil de empresa');
      return redirect()->route('Principal')->with('PerfilExistente','Ya cuentas con un perfil de empresa');
    }else {
      foreach ($request->categorias as $key => $value) {
        $PrestadorPorCategoria = new Prestador_por_Categoria();
        $PrestadorPorCategoria->id_categoria = $value;
        $PrestadorPorCategoria->id_prestador = $PrestadorGuardado->id; //$ExistePrestador = id de prestador
        $PrestadorPorCategoria->save();
      }
      return redirect()->route('Publicar')->with('PerfilCreado','Ya puedes empezar a publicar');
      // return view('Ecommerce.publicar')->with('PerfilCreado','Ya tienes un perfil de empresa');
    }
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

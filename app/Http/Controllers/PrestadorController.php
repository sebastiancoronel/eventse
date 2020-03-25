<?php

namespace App\Http\Controllers;
use Auth;
use App\Prestador;
use App\Cliente;
use Illuminate\Http\Request;

class PrestadorController extends Controller
{
/*============================
              Menú
==============================*/
    public function Resumen(){
      return view('Prestador.Menu.resumen');
    }

    public function MisAlquileres(){
      return view('Prestador.Menu.Alquileres_y_Reservas.mis_alquileres');
    }

    public function PreguntasRecibidas(){
      return view('Prestador.Menu.Preguntas.preguntas_recibidas');
    }
    public function ServiciosFavoritos(){
      return view('Prestador.Menu.Servicios_Contratados.favoritos');
    }
    //completar_datos retorna la vista para crear una cuenta particual y de inmueble
    public function completar_datos(){
      $path = storage_path() . "/json/ProvinciasLocalidades.json";
      $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
      //dd($ProvinciasLocalidadesJson);
      return view('auth.completar_datos',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
    }

    public function AlmacenarDatosPrestador(Request $request){
      $ConsultarDatos = UserDato::where('user_id',Auth::user()->id)
                                ->select('*')
                                ->first();
      //dd($ConsultarDatos);
      if ($ConsultarDatos == null ) {
        $Cliente = new UserDato;
        $Cliente->user_id = Auth::user()->id;
        $Cliente->dni = $request->dni;
        $Cliente->provincia = $request->provincia_nombre;
        $Cliente->localidad = $request->localidad;
        $Cliente->telefono = $request->telefono;
        $Cliente->fecha_de_alta = date('Y-m-d');
        $Cliente->save();
        return redirect()->route('principal');
      }else{
          return redirect()->route('principal');
      }
    }

    public function ComprobarDatosPersonalesCompletos(){

    }

}

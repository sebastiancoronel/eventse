<?php

namespace App\Http\Controllers;
use auth;
use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
/*=============================
              Menú
==============================*/
    //Resumen
      public function ClienteResumen(){
        return view('Perfiles.Cliente.Menu.resumen');
      }
    //Servicios contratados
      public function ServiciosFavoritos(){
        return view('Perfiles.Cliente.Menu.Servicios.favoritos');
      }

      public function PreguntasRealizadas(){
        return view('Perfiles.Cliente.Menu.Servicios.preguntas_realizadas');
      }

      public function ServiciosFinalizados(){
        return view('Perfiles.Cliente.Menu.Servicios.servicios_finalizados');
      }
/*=============================
              Funciones
==============================*/

      public function completar_datos(){
        $path = storage_path() . "/json/ProvinciasLocalidades.json";
        $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
        //dd($ProvinciasLocalidadesJson);
        return view('auth.completar_datos',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
      }

      public function AlmacenarDatosCliente(Request $request){
        $ConsultarDatos = Cliente::where('user_id',Auth::user()->id)
                                  ->select('*')
                                  ->first();

        if ($ConsultarDatos == null ) {
          $Cliente = new Cliente;
          $Cliente->user_id = Auth::user()->id;
          $Cliente->dni = $request->dni;
          $Cliente->provincia = $request->provincia_nombre;
          $Cliente->localidad = $request->localidad;
          $Cliente->telefono = $request->telefono;
          $Cliente->fecha_de_alta = date('Y-m-d');
          $Cliente->save();
          return redirect()->route('Principal');
        }else{
            return redirect()->route('Principal');
        }
    }
}

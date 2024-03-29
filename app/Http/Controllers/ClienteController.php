<?php

namespace App\Http\Controllers;
use auth;
use View;
use App\Cliente;
use App\Prestador;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
  /*=============================
                Menú
  ==============================*/
    //Resumen
      public function ClienteResumen(){
        $user_id = Auth::user()->id;
        $Prestador = Prestador::where('user_id',$user_id)->first();
        return view('AdminLTE.Cliente.Menu.resumen',['Prestador'=>$Prestador]);
      }
    //Servicios contratados
      public function ServiciosFavoritos(){
        return view('AdminLTE.Cliente.Menu.Servicios.favoritos');
      }

      public function PreguntasRealizadas(){
        return view('AdminLTE.Cliente.Menu.Servicios.preguntas_realizadas');
      }

      public function ServiciosFinalizados(){
        return view('AdminLTE.Cliente.Menu.Servicios.servicios_finalizados');
      }

      public function PresupuestosRecibidos(){
        return view('AdminLTE.Cliente.Menu.Servicios.presupuestos_recibidos');
      }

  /*=============================
                Funciones
  ==============================*/

      public function completar_datos(){
        $path = storage_path() . "/json/ProvinciasLocalidades.json";
        $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
         View::share ('ProvinciasLocalidadesJson', $ProvinciasLocalidadesJson);
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

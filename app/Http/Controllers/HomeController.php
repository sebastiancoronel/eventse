<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use auth;
use App\Notificacion;
use App\Categoria;
use App\Prestador;
use App\Servicio;
use App\Pregunta;
use App\Presupuesto;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $Categorias = Categoria::all();
      return view('AdminLTE.home',['Categorias'=>$Categorias]);
    }

    public function MostrarPreguntasRecibidas(){
      $id_prestador = Prestador::where( 'user_id' , Auth::user()->id )->pluck('id')->first();
      
      $Preguntas = Pregunta::where( 'preguntas.id_prestador' , $id_prestador )
                            ->where('preguntas.respuesta' , null)
                            ->Join( 'users' , 'preguntas.user_id' , '=' , 'users.id' )
                            ->Join( 'servicios' , 'preguntas.id_servicio' , '=' , 'servicios.id' )
                            ->select('preguntas.*','users.id as user_id', 'users.name','users.lastname','servicios.nombre as nombre_servicio')
                            ->orderBy( 'id' , 'DESC' )
                            ->take(20)
                            ->get();
      // dd($Preguntas);
      return view('AdminLTE.preguntas', ['Preguntas' => $Preguntas]);
    }

    public function AlmacenarRespuesta( Request $request ){

      $request->validate([
        'respuesta' => 'required|max:1000'
      ]);

      $Pregunta = Pregunta::findOrfail( $request->id_pregunta );
      $Pregunta->respuesta = $request->respuesta;
      $Pregunta->update();

      Notificacion::create([
        'user_id_notificar' => $Pregunta->user_id,
        'user_id_trigger' => Auth::user()->id,
        'id_evento' => 4, //Respuesta a pregunta
        'visto' => 0,
        ]);

      return redirect()->route('MostrarPreguntasRecibidas')->with( 'Respondido' , ' ' );
      
    }

    public function MostrarRespuestasRecibidas(){
      $Respuestas = Pregunta::where( 'user_id' , Auth::user()->id )
                            ->Join( 'servicios' , 'preguntas.id_servicio' , '=' , 'servicios.id' )
                            ->select('preguntas.*','servicios.nombre as nombre_servicio','servicios.id as id_servicio')
                            ->orderBy('updated_at' , 'DESC')
                            ->get();

      return view('AdminLTE.respuestas', [ 'Respuestas' => $Respuestas ]);
    }

    public function MostrarPresupuestosSolicitados(){

      $id_prestador = Prestador::where( 'user_id' , Auth::user()->id )->pluck('id')->first();
      $Presupuestos = Presupuesto::where('presupuestos.id_prestador' , $id_prestador )
                                ->where( 'monto' , null )
                                ->where( 'estado' , 'Aceptado' )
                                ->Join( 'servicios' , 'presupuestos.id_servicio' , '=' , 'servicios.id' )
                                ->select( 'presupuestos.*' ,'servicios.nombre', 'servicios.id as id_servicio' )
                                ->orderBy('created_at', 'asc')
                                ->get();
      
      return view('AdminLTE.presupuestos_solicitados' , [ 'Presupuestos' => $Presupuestos ]);
    } 

   
    public function MostrarMisServicios(){
      $id_prestador = Prestador::where( 'user_id' , Auth::user()->id )->pluck('id')->first();
      $Servicios = Servicio::withTrashed()
                            ->where('id_prestador', $id_prestador)
                            ->Join( 'categorias' , 'servicios.id_categoria' , '=' , 'categorias.id' )
                            ->select('servicios.*', 'categorias.nombre as nombre_categoria')
                            ->get();

      return view('AdminLTE.mis_servicios' , ['Servicios' => $Servicios]);

    }

    public function HabilitarDeshabilitarServicio( Request $request ){

      if ( $request->switch_servicio == 'Habilitar'){
        $Servicio = Servicio::withTrashed()
                            ->where('id', $request->id_servicio)
                            ->first();
        $Servicio->restore();
        return 'Habilitado';

      }else{
        if ( $request->switch_servicio == 'Deshabilitar'){
          $Servicio = Servicio::findOrfail($request->id_servicio);
          $Servicio->delete();
          return 'Deshabilitado';
        }
      }
    }

    public function EditarServicio($id){
      $Servicio = Servicio::withTrashed()
                            ->where('id', $id)
                            ->first();

      return view( 'AdminLTE.editar_servicio', [ 'Servicio' => $Servicio] );
    }

    public function ModificarServicio( Request $request ){
      // dd($request);
      $request->validate([      
        'nombre' => 'required',
        'descripcion' => 'required',
      ]);

      $Servicio = Servicio::findOrfail( $request->id_servicio );
      $Servicio->nombre = $request->nombre;
      $Servicio->descripcion = $request->descripcion;

      if ( $request->hasFile('foto_1') ) {
      $random_string_1 = Str::random(20);
      $Foto = $request->file('foto_1');
      $NombreImagen = $random_string_1 . '.' . $Foto->getClientOriginalExtension();
      $RutaImagen = public_path('images/servicios');
      $Foto->move($RutaImagen, $NombreImagen);
      $Servicio->foto_1 = 'images/servicios/' . $NombreImagen;
      }

      if ($request->hasFile('foto_2')) {
      $random_string_2 = Str::random(20);
      $Foto = $request->file('foto_2');
      $NombreImagen = $random_string_2 . '.' . $Foto->getClientOriginalExtension();
      $RutaImagen = public_path('images/servicios');
      $Foto->move($RutaImagen, $NombreImagen);
      $Servicio->foto_2 = 'images/servicios/' . $NombreImagen;
      }

      if ($request->hasFile('foto_3')) {
      $random_string_3 = Str::random(20);
      $Foto = $request->file('foto_3');
      $NombreImagen = $random_string_3 . '.' . $Foto->getClientOriginalExtension();
      $RutaImagen = public_path('images/servicios');
      $Foto->move($RutaImagen, $NombreImagen);
      $Servicio->foto_3 = 'images/servicios/' . $NombreImagen;
      }

      if( $request->hasFile('foto_4') ) {
      $random_string_4 = Str::random(20);
      $Foto = $request->file('foto_4');
      $NombreImagen = $random_string_4 . '.' . $Foto->getClientOriginalExtension();
      $RutaImagen = public_path('images/servicios');
      $Foto->move($RutaImagen, $NombreImagen);
      $Servicio->foto_4 = 'images/servicios/' . $NombreImagen;
      }
      
      $Servicio->precio = $request->precio;

      if ( $request->precio_a_convenir ) {
        $Servicio->precio_a_convenir = 1;
      }else{
        $Servicio->precio_a_convenir = null;
        $request->validate([
          'precio' => 'required|integer'
        ]);
      }

      $Servicio->update();

      return redirect()->route('MostrarMisServicios')->with( 'ServicioModificado' , ' ' );
      
    }

    public function CreateModificarDatos(){

      $User = User::where('id', Auth::user()->id )
                  ->select('*')
                  ->first();

      $Prestador = Prestador::where('user_id', Auth::user()->id )
                            ->select('*')
                            ->first();
      
      return view('AdminLTE.modificar_datos', [ 'User' => $User, 'Prestador' => $Prestador]);
    }

    public function ActualizarDatosPersonales( Request $request ){
      
      $Prestador = Prestador::where('user_id', Auth::user()->id )->select('*')->first();
      
      if ($Prestador) {
          $Prestador->nombre = $request->nombre_prestador;
          $Prestador->email = $request->email_prestador;
          $Prestador->telefono = $request->telefono_prestador;

          if ( $request->hasFile('foto') ) {
            $ImagenSubida = $request->file('foto');
            $NombreImagen = Auth::user()->id . '.' . $ImagenSubida->getClientOriginalExtension();
            $RutaImagen = public_path('/images/foto_perfil');
            $ImagenSubida->move($RutaImagen, $NombreImagen);
            $Prestador->foto = '/images/foto_perfil/' . $NombreImagen;
            }

          $Prestador->update();
      }

      $User = User::findOrfail( Auth::user()->id );
      $User->email = $request->email_personal;
      $User->telefono = $request->telefono_personal;
      $User->update();

      return redirect()->route('CreateModificarDatos')->with( 'DatosActualizados' , ' ' );
    }
    
}

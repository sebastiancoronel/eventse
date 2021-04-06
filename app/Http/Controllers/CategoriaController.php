<?php

namespace App\Http\Controllers;

use App\Servicio;
use App\Categoria;
use App\Caracteristica;
use App\Reserva;
use Carbon\Carbon;
use App\Caracteristica_por_categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriaController extends Controller
{
    public function index(){
        $Categorias = Categoria::all();
        $UltimosAgregados = Servicio::where( 'deleted_at' , '=' , null )
                                    ->where( 'moderado' , 1 )
                                    ->where( 'aprobado' , 1 )
                                    ->select('*')->orderBy('created_at','desc')->get();

        
        // Esto es para mostrar el nombre del mes actual en el slider grande
        setlocale(LC_ALL, 'es');
        $Hoy = Carbon::now();
        $fecha = Carbon::parse($Hoy);
        $fecha->format("F"); // Inglés.
        $Mes = $fecha->formatLocalized('%B');// mes en idioma español

        #Destacados deberia traer los servicios que superen 5, 10, 15, 20 y 25 contrataciones
        #Buscar por id sevicio y concretado = 1 y contar cuantos tiene, si tiene mas de 10 y hasta 20 se muestra y asi para el resto.
        $DestacadosX5 = array();
        $DestacadosX10 = array();
        $DestacadosX15 = array();
        $DestacadosX20 = array();
        $DestacadosX25 = array();

        $Servicios = Servicio::where( 'deleted_at' , '=' , null )
                            ->where( 'moderado' , 1 )
                            ->where( 'aprobado' , 1 )
                            ->get();
        $Cantidad = 0;

        // 5 a 10 Contrataciones
        foreach ( $Servicios as $servicio ) {
            
            $ReservasConcretadas = Reserva::where( 'id_servicio' , $servicio->id )
                                    ->where( 'concretado' , 1 )
                                    ->get();
            //dd($ReservasConcretadas);
            $Cantidad = count($ReservasConcretadas);

            if ( $Cantidad >= 5 && $Cantidad < 10) {
                $servicio_concretado = Servicio::where( 'servicios.deleted_at' , null )
                                                ->where( 'servicios.id' , $servicio->id )
                                                ->Join( 'categorias' , 'servicios.id_categoria' , '=' , 'categorias.id' )
                                                ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
                                                ->Join( 'users' , 'prestadors.user_id' , '=' , 'users.id' )
                                                ->select('servicios.*','categorias.nombre as nombre_categoria','users.provincia', 'users.localidad')
                                                ->first();
                array_push( $DestacadosX5 , $servicio_concretado );

                //break;
            }
            $Cantidad = 0;
        }

        // 10 a 15 Contrataciones
        foreach ( $Servicios as $servicio ) {
            
            $ReservasConcretadas = Reserva::where( 'id_servicio' , $servicio->id )
                                    ->where( 'concretado' , 1 )
                                    ->get();
            //dd($ReservasConcretadas);
            $Cantidad = count($ReservasConcretadas);
            
            if ( $Cantidad >= 10 && $Cantidad < 15) {
                
                $servicio_concretado = Servicio::where( 'servicios.deleted_at' , null )
                                                ->where( 'servicios.id' , $servicio->id )
                                                ->Join( 'categorias' , 'servicios.id_categoria' , '=' , 'categorias.id' )
                                                ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
                                                ->Join( 'users' , 'prestadors.user_id' , '=' , 'users.id' )
                                                ->select('servicios.*','categorias.nombre as nombre_categoria','users.provincia', 'users.localidad')
                                                ->first();
                array_push( $DestacadosX10 , $servicio_concretado );

                //break;
            }
            $Cantidad = 0;
        }

        // 15 a 20 Contrataciones
        foreach ( $Servicios as $servicio ) {
            
            $ReservasConcretadas = Reserva::where( 'id_servicio' , $servicio->id )
                                    ->where( 'concretado' , 1 )
                                    ->get();
            //dd($ReservasConcretadas);
            $Cantidad = count($ReservasConcretadas);

            if ( $Cantidad >= 15 && $Cantidad < 20) {
                $servicio_concretado = Servicio::where( 'servicios.deleted_at' , null )
                                                ->where( 'servicios.id' , $servicio->id )
                                                ->Join( 'categorias' , 'servicios.id_categoria' , '=' , 'categorias.id' )
                                                ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
                                                ->Join( 'users' , 'prestadors.user_id' , '=' , 'users.id' )
                                                ->select('servicios.*','categorias.nombre as nombre_categoria','users.provincia', 'users.localidad')
                                                ->first();
                array_push( $DestacadosX15 , $servicio_concretado );
         
                //break;
            }
            $Cantidad = 0;
        }

        // 20 a 25 Contrataciones
        foreach ( $Servicios as $servicio ) {
            
            $ReservasConcretadas = Reserva::where( 'id_servicio' , $servicio->id )
                                    ->where( 'concretado' , 1 )
                                    ->get();
            //dd($ReservasConcretadas);
            $Cantidad = count($ReservasConcretadas);

            if ( $Cantidad >= 20 && $Cantidad < 25) {
                $servicio_concretado = Servicio::where( 'servicios.deleted_at' , null )
                                                ->where( 'servicios.id' , $servicio->id )
                                                ->Join( 'categorias' , 'servicios.id_categoria' , '=' , 'categorias.id' )
                                                ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
                                                ->Join( 'users' , 'prestadors.user_id' , '=' , 'users.id' )
                                                ->select('servicios.*','categorias.nombre as nombre_categoria','users.provincia', 'users.localidad')
                                                ->first();
                array_push( $DestacadosX20 , $servicio_concretado );

                //break;
            }
            $Cantidad = 0;
        }
        
        // dd( $DestacadosX5 , $DestacadosX10 , $DestacadosX15 , $DestacadosX20 , $DestacadosX25 );
        
        return view('Principal.principal',[ 
        'Categorias' => $Categorias , 
        'Mes' => $Mes, 
        'UltimosAgregados' => $UltimosAgregados , 
        'DestacadosX5' => $DestacadosX5 , 
        'DestacadosX10' => $DestacadosX10 ,
        'DestacadosX15' => $DestacadosX15 ,
        'DestacadosX20' => $DestacadosX20 ,
        'DestacadosX25' => $DestacadosX25
 
        ]);
    }
   
    public function CrearCategorias(){

        $CategoriasGestionar = Categoria::withTrashed() //Se llama asi porque en AppServiceProvider se usa otra variable llamada Categorias
                                ->select('*')
                                ->get();
        
        return view('AdminLTE.Admin.crear_categorias',[ 'CategoriasGestionar' => $CategoriasGestionar ]);
    }

    public function AlmacenarCategoria( Request $request ){

        $request->validate([
            'nombre_categoria' => 'required|max:60',
            'foto' => 'required'
        ]);

        $Categoria = new Categoria;
        $Categoria->nombre = $request->nombre_categoria;

        $random_string = Str::random(20);
        $Foto = $request->file('foto');
        $NombreImagen = $random_string . '.' . $Foto->getClientOriginalExtension();
        $RutaImagen = public_path('/images/categorias/');
        $Foto->move($RutaImagen, $NombreImagen);

        $Categoria->foto = 'images/categorias/' . $NombreImagen;
        $Categoria->save();

        return redirect()->route('CrearCategorias')->with('Success','Éxito');

    }

    public function EditarCategoria( Request $id ){
        
        $Categoria = Categoria::withTrashed()->findOrfail($id)->first();

        return view('AdminLTE.Admin.editar_categoria',[ 'Categoria' => $Categoria ]);
    }

    public function ActualizarCategoria( Request $request ){

        $Categoria = Categoria::withTrashed()->where( 'id' ,$request->id )->select('*')->first();

        if ( $request->hasFile('foto') ) {
            $random_string = Str::random(20);
            $Foto = $request->file('foto');
            $NombreImagen = $random_string . '.' . $Foto->getClientOriginalExtension();
            $RutaImagen = public_path('/images/categorias/');
            $Foto->move($RutaImagen, $NombreImagen);
            $Categoria->foto = 'images/categorias/' . $NombreImagen;
        }

        $Categoria->nombre = $request->nombre_categoria;
        $Categoria->update();

        return redirect()->route('CrearCategorias')->with('Success','Éxito');


    }

    public function EliminarCategoria( Request $request ){

        if ( $request->switch_categoria == 'Habilitar') {
            $Categoria = Categoria::withTrashed()
                                    ->where('id', $request->id_categoria )
                                    ->first();
            $Categoria->restore();

            $CaracteristicasPorCategoria = Caracteristica_por_categoria::withTrashed()
                                                                        ->where( 'id_categoria' , $request->id_categoria )
                                                                        ->Join( 'caracteristicas' , 'caracteristica_por_categorias.id_caracteristica' , '=' , 'caracteristicas.id' )
                                                                        ->select('caracteristicas.id')
                                                                        ->get();

        foreach ($CaracteristicasPorCategoria as $caracteristica_por_categoria) {
            $Caracteristica = Caracteristica::withTrashed()
                                            ->where('id', $caracteristica_por_categoria->id)
                                            ->first();
            $Caracteristica->restore();
        }

        $Servicios = Servicio::withTrashed()->where( 'id_categoria' , $request->id_categoria )->get();
                foreach ($Servicios as $servicio) {
                    $servicio->restore();
                }

        return 'Habilitada';
            
        }else{
            if ( $request->switch_categoria == 'Deshabilitar') {

                $Categoria = Categoria::find( $request->id_categoria );

                $Categoria->delete();

                $CaracteristicasPorCategoria = Caracteristica_por_categoria::withTrashed()
                                                    ->where( 'id_categoria' , $request->id_categoria )
                                                    ->Join( 'caracteristicas' , 'caracteristica_por_categorias.id_caracteristica' , '=' , 'caracteristicas.id' )
                                                    ->select('caracteristicas.id')
                                                    ->get();

                foreach ($CaracteristicasPorCategoria as $caracteristica_por_categoria) {
                    $Caracteristica = Caracteristica::find($caracteristica_por_categoria->id);
                    $Caracteristica->delete();
                }
                
                $Servicios = Servicio::where( 'id_categoria' , $request->id_categoria )->get();
                foreach ($Servicios as $servicio) {
                    $servicio->delete();
                }
                
                return 'Deshabilitada';
            }
        }    

        return redirect()->route('CrearCategorias')->with('Success','Éxito');

    }

    public function ServiciosPorCategoria( $id ){

        $Categoria = Categoria::findOrfail($id);
        $Servicios = Servicio::where( 'servicios.deleted_at' , null )
                                ->where('id_categoria', $id)
                                ->Join( 'categorias' , 'servicios.id_categoria' , '=' , 'categorias.id' )
                                ->Join( 'prestadors' , 'servicios.id_prestador' , '=' , 'prestadors.id' )
                                ->Join( 'users' , 'prestadors.user_id' , '=' , 'users.id' )
                                ->select('servicios.*','categorias.nombre as nombre_categoria','users.provincia', 'users.localidad')
                                ->orderBy('created_at', 'desc')
                                ->get();

        return view('Principal.servicios_por_categoria' , [ 'Categoria' => $Categoria , 'Servicios' => $Servicios ]);
    }
}

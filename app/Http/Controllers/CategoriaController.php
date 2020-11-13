<?php

namespace App\Http\Controllers;

use App\Servicio;
use App\Categoria;
use App\Caracteristica;
use App\Caracteristica_por_categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriaController extends Controller
{
    public function index(){
        $Categorias = Categoria::all();
        return view('Principal.principal',[ 'Categorias' => $Categorias ]);
    }
   
    public function CrearCategorias(){
        $Categorias = Categoria::withTrashed()
                                ->select('*')
                                ->get();

        return view('AdminLTE.Admin.crear_categorias',[ 'Categorias' => $Categorias ]);
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
        
        $Categoria = Categoria::findOrfail($id)->first();

        return view('AdminLTE.Admin.editar_categoria',[ 'Categoria' => $Categoria ]);
    }

    public function ActualizarCategoria( Request $request ){

        $Categoria = Categoria::where( 'id' ,$request->id )->select('*')->first();

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

    public function EliminarCategoria( Request $request ){ //FALTA BORRAR LOS SERVICIOS EN CASCADA

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
}

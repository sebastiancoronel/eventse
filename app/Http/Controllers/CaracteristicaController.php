<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Caracteristica;
use App\Caracteristica_por_categoria;

class CaracteristicaController extends Controller
{
    public function CrearCaracteristicas($id){

        $Categoria = Categoria::withTrashed()->where( 'id' , $id )->first();

        $Caracteristicas = Caracteristica_por_categoria::withTrashed()
                                                        ->where( 'id_categoria' , $Categoria->id )
                                                        ->Join( 'caracteristicas' , 'caracteristica_por_categorias.id_caracteristica' , '=' , 'caracteristicas.id' )
                                                        ->select('caracteristicas.nombre as nombre_caracteristica', 'caracteristicas.deleted_at','caracteristicas.id as id_caracteristica','caracteristicas.id as id_caracteristica')
                                                        ->get();
        // dd($Caracteristicas);
        return view('AdminLTE.Admin.ver_caracteristicas',[ 'Categoria' => $Categoria, 'Caracteristicas' => $Caracteristicas ]);
    }

    public function AlmacenarCaracteristica(Request $request){

        $Caracteristica = new Caracteristica;
        $Caracteristica->nombre = $request->nombre_caracteristica;
        $Caracteristica->save();

        $CaracteristicaPorCategoria = new Caracteristica_por_categoria;
        $CaracteristicaPorCategoria->id_categoria = $request->id_categoria;
        $CaracteristicaPorCategoria->id_caracteristica = $Caracteristica->id;
        $CaracteristicaPorCategoria->save();

        return redirect()->route('CrearCaracteristicas', ['id' => $request->id_categoria])->with('Success','Éxito');

    }

    public function EditarCaracteristica( Request $id ){
        $Caracteristica = Caracteristica::withTrashed($id)->first();

        return view('AdminLTE.Admin.editar_caracteristica',[ 'Caracteristica' => $Caracteristica ] );
    }

    public function ActualizarCaracteristica( Request $request ){
        $Caracteristica = Caracteristica::where( 'id' ,$request->id )->select('*')->first();
        $Caracteristica->nombre = $request->nombre;
        $Caracteristica->update();

        return redirect()->route('CrearCaracteristicas', ['id' => $request->id] )->with('Success','Caracteristica actualizada');
    }


    public function HabilitarDeshabilitarCaracteristica( Request $request ){
        if ( $request->switch_caracteristica == 'Habilitar') {
            $Caracteristica = Caracteristica::withTrashed()
                                            ->where('id', $request->id_caracteristica )
                                            ->first();
            $Caracteristica->restore();

            // $CaracteristicaPorCategoria = Caracteristica_por_categoria::withTrashed()
            //                                                             ->where('id_categoria', $request->id_categoria )
            //                                                             ->where('id_caracteristica', $request->id_caracteristica )
            //                                                             ->first();
            // $CaracteristicaPorCategoria->restore();

            return 'Habilitada';
            
        }else{
            if ( $request->switch_caracteristica == 'Deshabilitar') {
                $Caracteristica = Caracteristica::findOrfail($request->id_caracteristica);
                
                $Caracteristica->delete();
                
                // $CaracteristicaPorCategoria = Caracteristica_por_categoria::where('id_categoria', $request->id_categoria )
                //                                                             ->where('id_caracteristica', $request->id_caracteristica )
                //                                                             ->first();
                                                                            
                // $CaracteristicaPorCategoria->delete();

                return 'Deshabilitada';
            }
        }        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Caracteristica_por_categoria;

class CaracteristicaController extends Controller
{
    public function CrearCaracteristicas(Request $id){

        $Categoria = Categoria::findOrfail($id)->first();

        $Caracteristicas = Caracteristica_por_categoria::where( 'id_categoria' , $Categoria->id )
                                                    ->select('*')
                                                    ->first();
                                                    
        return view('AdminLTE.Admin.ver_caracteristicas',[ 'Categoria' => $Categoria, 'Caracteristicas' => $Caracteristicas ]);
    }
}

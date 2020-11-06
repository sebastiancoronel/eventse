<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categorias = Categoria::all();
        return view('Principal.principal',[ 'Categorias' => $Categorias ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CrearCategorias()
    {
        $Categorias = Categoria::all();
        return view('AdminLTE.Admin.gestionar_categorias',[ 'Categorias' => $Categorias ]);
    }

    public function AlmacenarCategoria( Request $request ){
    }

    public function ModificarCategoria( Request $request ){
    }

    public function EliminarCategoria( Request $request ){
    }
}

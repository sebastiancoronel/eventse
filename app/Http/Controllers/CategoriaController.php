<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

        
        $Categoria = new Categoria;
        $Categoria->nombre = $request->nombre_categoria;

        $random_string = Str::random(20);
        $Foto = $request->file('foto');
        $NombreImagen = $random_string . '.' . $Foto->getClientOriginalExtension();
        $RutaImagen = public_path('/images/categorias/');
        $Foto->move($RutaImagen, $NombreImagen);

        $Categoria->foto = 'images/categorias/' . $NombreImagen;
        $Categoria->save();

        return redirect()->route('CrearCategorias')->with('CategoriaCreada','Se creó una nueva categoria con éxito');

    }

    public function ModificarCategoria( Request $request ){
    }

    public function EliminarCategoria( Request $request ){
    }
}

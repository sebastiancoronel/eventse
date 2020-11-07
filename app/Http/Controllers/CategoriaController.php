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
        $Categorias = Categoria::where('deleted_at', NULL)
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

        $Categoria = Categoria::where( 'id' , $request->id )
                                ->select('*')
                                ->first();
        $Categoria->delete();

        return redirect()->route('CrearCategorias')->with('Success','Éxito');

    }
}

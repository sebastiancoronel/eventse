<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

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
      return view('AdminLTE.preguntas');
    }

}

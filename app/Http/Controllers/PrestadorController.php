<?php

namespace App\Http\Controllers;

use App\Prestador;
use Illuminate\Http\Request;

class PrestadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prestador  $prestador
     * @return \Illuminate\Http\Response
     */
    public function show(Prestador $prestador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prestador  $prestador
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestador $prestador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestador  $prestador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestador $prestador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestador  $prestador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestador $prestador)
    {
        //
    }

    //completar_datos retorna la vista para crear una cuenta particual y de inmueble
    public function completar_datos(){
      $path = storage_path() . "/json/ProvinciasLocalidades.json";
      $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
      //dd($ProvinciasLocalidadesJson);
      return view('completar_datos',['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
    }

    public function AlmacenarDatosPrestador(Request $request){
      dd($request);
    }


    public function menu(){
      return view('Prestador.panel');
    }

}

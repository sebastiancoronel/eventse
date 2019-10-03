<?php

namespace App\Http\Controllers;

use App\Localidad;
use App\Provincia;
use Illuminate\Http\Request;


class LocalidadController extends Controller
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
        $TraerProvincias = Provincia::all();
        return view('SuperAdmin.localidad.create',['TraerProvincias'=> $TraerProvincias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request,['nombre'=>"required",
                                  'id_provincia'=>"required"
                                ]);//No valida para que en una provincia no se repitan las localidades pero si el mismo nombre de localidades para diferentes provincias

        $localidad = new Localidad;
        $localidad->nombre = $request->nombre;
        $localidad->id_provincia = $request->id_provincia;
        $localidad->save();
        return redirect()->route('localidad.create')->with('message','La localidad se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function show(Localidad $localidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Localidad $localidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Localidad $localidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Localidad $localidad)
    {
        //
    }
}

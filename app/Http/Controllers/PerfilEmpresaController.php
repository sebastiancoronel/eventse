<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilEmpresaController extends Controller
{

  public function CrearPerfilEmpresa(){
    return view('Perfiles.Empresa.crear_perfil_empresa');
  }

  public function FormularioPerfilEmpresa(){
    return view('Perfiles.Empresa.formulario_perfil_empresa');
  }

/*============================
              Menú
==============================*/
  public function Resumen(){
    return view('Perfiles.Empresa.Menu.resumen');
  }

  public function PreguntasRecibidas(){
    return view('Perfiles.Empresa.Menu.Preguntas.preguntas_recibidas');
  }

  public function MisAlquileres(){
    return view('Perfiles.Empresa.Menu.Alquileres_y_Reservas.mis_alquileres');
  }

/*============================
              Fin Menú
==============================*/
}

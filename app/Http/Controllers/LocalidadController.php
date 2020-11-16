<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocalidadController extends Controller
{
    public function TraerLocalidades(Request $request){
        $provincia_id = $request->provincia_id;
        $Localidades = array();
  
        $path = storage_path() . "/json/ProvinciasLocalidades.json";
        $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
        foreach ($ProvinciasLocalidadesJson as $provincia) {
          if ( $provincia['id'] == $provincia_id ) {
  
            foreach ($provincia as $localidad) {
                array_push($Localidades,$localidad);
            }
          }
        }
        //dd($Localidades);
        return ($Localidades);
      }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catering extends Model
{
  use SoftDeletes;
  protected $table = 'caterings';
  protected $fillable = ['foto_1','foto_2','foto_3','foto_4','titulo','cantidad_invitados','servicio_pizza',
                        'mesa_dulce','pernil','coffee_break','servicio_lunch','servicio_gourmet','provincia',
                        'localidad','id_categoria','id_prestador','fecha_publicacion'];

  //Relaciones
  public function Prestador(){
    return $this->hasOne(Prestador::class, 'id_prestador');
  }
}

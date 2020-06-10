<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Animacion extends Model
{
  use SoftDeletes;
  protected $table = 'animacions';
  protected $guarded = 'id';

  protected $fillable = ['foto_1','foto_2','foto_3','foto_4','titulo','cant_animadores','años_experiencia','edades','descripcion','magos','maquillaje','karaoke','payasos','personajes','titeres','globologia','robot_led','maquillaje_fluor','id_categoria','id_prestador','fecha_publicacion'];

  //Relaciones
  public function Prestadores(){
    return $this->hasOne(Prestador::class,'id_prestador');
  }
}

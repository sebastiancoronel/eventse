<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MusicaDj extends Model
{
  use SoftDeletes;
  protected $table = 'caterings';
  protected $fillable = ['foto_1','foto_2','foto_3','foto_4','titulo','cumpleaños_infantiles','fiestas_tematicas','comuniones','bodas_y_aniversarios','musica_70',
                        'musica_80','musica_90','musica_2000','cumbia','cuarteto','reggaeton','bachata','descripcion','precio','precio_a_convenir','localidad','id_categoria','id_prestador','fecha_publicacion'];

  //Relaciones
  public function Prestador(){
    return $this->hasOne(Prestador::class, 'id_prestador');
  }
}

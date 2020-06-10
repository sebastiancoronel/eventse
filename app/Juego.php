<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Juego extends Model
{
    use SoftDeletes;
    protected $table = 'juegos';
    protected $guarded = 'id';

    protected $fillable = ['foto_1','foto_2','foto_3','foto_4','titulo','descripcion','provincia','localidad','precio','precio_a_convenir','id_categoria','id_prestador','fecha_publicacion'];

    //Relaciones
    public function Prestadores(){
      return $this->hasOne(Prestador::class,'id_prestador');
    }
}

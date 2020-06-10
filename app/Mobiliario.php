<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobiliario extends Model
{
    protected $table = 'mobiliarios';
    protected $guarded = 'id';
    protected $fillable = ['foto_1','foto_2','foto_3','foto_4','titulo','capacidad','tipo','sillones','puf','mesas',
                            'puf_luminoso','gazebos','carpas','caminos','fanales','farolas','biombo','mini_living',
                            'lamparas_vintage','camastro','puf_redondo','isla_circular','descripcion','id_categoria',
                            'id_prestador','fecha_publicacion'];

    public function Prestadores(){
      return $this->hasOne(Prestador::class, 'id_prestador');
    }
}

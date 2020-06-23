<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreguntaAnimacion extends Model
{
    use SoftDeletes;

    protected $table = 'pregunta_animacions';
    protected $fillable = ['id_prestador','id_animacion','id_cliente','pregunta','respuesta'];

    //Relaciones
    public function PreguntaCliente(){
        $this->hasOne(Prestador::class,'id_prestador');
        $this->hasOne(Cliente::class,'id_cliente');
        $this->hasOne(Animacion::class,'id_animacion');
    }
}

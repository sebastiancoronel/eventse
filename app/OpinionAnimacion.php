<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class OpinionAnimacion extends Model
{
    use SoftDeletes;

    protected $table = 'opinion_animacions';
    protected $fillable = ['id_prestador','id_animacion','id_cliente','opinion'];

    //Relaciones
    public function OpinionCliente(){
        $this->hasOne(Prestador::class,'id_prestador');
        $this->hasOne(Cliente::class,'id_cliente');
        $this->hasOne(Animacion::class,'id_animacion');
    }
}

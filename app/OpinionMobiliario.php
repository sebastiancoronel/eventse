<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpinionMobiliario extends Model
{
    use SoftDeletes;

    protected $table = 'opinion_mobiliarios';
    protected $fillable = ['id_prestador','id_mobiliario','id_cliente','opinion'];

    //Relaciones
    public function OpinionCliente(){
        $this->hasOne(Prestador::class,'id_prestador');
        $this->hasOne(Cliente::class,'id_cliente');
        $this->hasOne(Mobiliario::class,'id_mobiliario');
    }
}

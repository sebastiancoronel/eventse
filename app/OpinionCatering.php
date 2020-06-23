<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpinionCatering extends Model
{
    use SoftDeletes;
    protected $table = 'opinion_caterings';
    protected $fillable = ['id_prestador','id_catering','id_cliente','opinion'];

    //Relaciones
    public function OpinionCliente(){
        $this->hasOne(Prestador::class,'id_prestador');
        $this->hasOne(Cliente::class,'id_cliente');
        $this->hasOne(Catering::class,'id_catering');
    }
}

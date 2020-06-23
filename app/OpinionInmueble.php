<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpinionInmueble extends Model
{
    use SoftDeletes;

    protected $table = 'opinion_inmuebles';
    protected $fillable = ['id_prestador','id_inmueble','id_cliente','opinion'];

    //Relaciones
    public function OpinionCliente(){
        $this->hasOne(Prestador::class,'id_prestador');
        $this->hasOne(Cliente::class,'id_cliente');
        $this->hasOne(Inmueble::class,'id_inmueble');
    }



}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreguntaMobiliario extends Model
{
    use SoftDeletes;
    protected $table = 'pregunta_mobiliarios';
    protected $fillable = ['id_prestador','id_mobiliario','id_cliente','pregunta','respuesta'];

    //Relaciones
    public function PreguntaCliente(){
        $this->hasOne(Prestador::class,'id_prestador');
        $this->hasOne(Cliente::class,'id_cliente');
        $this->hasOne(Mobiliario::class,'id_mobiliario');
    }
}
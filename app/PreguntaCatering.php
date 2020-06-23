<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreguntaCatering extends Model
{
    use SoftDeletes;

    protected $table = 'pregunta_caterings';
    protected $fillable = ['id_prestador','id_catering','id_cliente','pregunta','respuesta'];
    //Relaciones
    public function PreguntaCliente(){
        $this->hasOne(Prestador::class,'id_prestador');
        $this->hasOne(Cliente::class,'id_cliente');
        $this->hasOne(Catering::class,'id_catering');
    }
}

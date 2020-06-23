<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreguntaInmueble extends Model
{
    use SoftDeletes;
    protected $table = 'pregunta_inmuebles';
    protected $fillable = ['id_prestador','id_inmueble','id_cliente','pregunta','respuesta'];
    
    //Relaciones
    public function PreguntaCliente(){
        $this->hasOne(Prestador::class,'id_prestador');
        $this->hasOne(Cliente::class,'id_cliente');
        $this->hasOne(Inmueble::class,'id_inmueble');
    }
}

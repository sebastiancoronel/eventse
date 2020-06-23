<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreguntaJuego extends Model
{
    use SoftDeletes;
    protected $table = 'pregunta_juegos';
    protected $fillable = ['id_prestador','id_juego','id_cliente','pregunta','respuesta'];

    //Relaciones
    public function PreguntaCliente(){
        $this->hasOne(Prestador::class,'id_prestador');
        $this->hasOne(Cliente::class,'id_cliente');
        $this->hasOne(Juego::class,'id_juego');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpinionJuego extends Model
{
    use SoftDeletes;

    protected $table = 'opinion_juegos';
    protected $fillable = ['id_prestador','id_juego','id_cliente','opinion'];

    //Relaciones
    public function OpinionCliente(){
        $this->hasOne(Prestador::class,'id_prestador');
        $this->hasOne(Cliente::class,'id_cliente');
        $this->hasOne(Juego::class,'id_juego');
    }
}

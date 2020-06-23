<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreguntaMusicaDj extends Model
{
    use SoftDeletes;
    protected $table = 'pregunta_musica_djs';
    protected $fillable = ['id_prestador','id_musicaDj','id_cliente','pregunta','respuesta'];

    //Relaciones
    public function PreguntaCliente(){
        $this->hasOne(Prestador::class,'id_prestador');
        $this->hasOne(Cliente::class,'id_cliente');
        $this->hasOne(MusicaDj::class,'id_musicaDj');
    }
}

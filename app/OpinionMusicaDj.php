<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpinionMusicaDj extends Model
{
    use SoftDeletes;

    protected $table = 'opinion_musica_djs';
    protected $fillable = ['id_prestador','id_musicaDj','id_cliente','opinion'];

    //Relaciones
    public function OpinionCliente(){
        $this->hasOne(Prestador::class,'id_prestador');
        $this->hasOne(Cliente::class,'id_cliente');
        $this->hasOne(musica_dj::class,'id_musicaDj');
    }
}

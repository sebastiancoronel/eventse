<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'carritos';
    protected $fillable = ['id_cliente','id_inmueble','id_juego','id_animacion','id_mobiliario','id_catering','id_musicaDj', 'total'];

    //Relaciones
    public function Cliente(){
        $this->hasMany(Cliente::class, 'id_cliente');
    }

    public function Inmueble(){
        $this->hasMany(Inmueble::class, 'id_inmueble');
    }

    public function Juego(){
        $this->hasMany(Juego::class, 'id_juego');
    }

    public function Animacion(){
        $this->hasMany(Animacion::class, 'id_animacion');
    }

    public function Mobiliario(){
        $this->hasMany(Mobiliario::class, 'id_mobiliario');
    }

    public function Catering(){
        $this->hasMany(Catering::class, 'id_catering');
    }

    public function MusicaDj(){
        $this->hasMany(MusicaDj::class, 'id_musicaDj');
    }
    
}

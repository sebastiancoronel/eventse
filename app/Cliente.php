<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'clientes';
    protected $fillable = ['nombre','apellido','email','telefono','dni','contraseña','id_puntos','id_alquiler'];
    protected $guarded = ['id'];

    //Relaciones
    public function puntos(){
        return $this->hasOne('App\Punto');
    }
    public function alquiler(){
        return $this->hasMany('App\Alquiler'); 
    }
    
}

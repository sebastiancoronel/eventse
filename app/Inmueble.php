<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inmueble extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'Inmuebles';
    protected $fillable = ['nombre','descripcion','direccion','superficie','id_servicio_inmueble','id_categoria'];
    protected $guarded = ['id'];

    //Relaciones
    public function servicios_inmueble(){
        return $this->hasMany('App\Servicio_Inmueble');
    }

    public function categorias(){
        return $this->belongsTo('App\Categoria');
    }
    
    

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inmueble extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'Inmuebles';
    protected $fillable = ['foto_1','foto_2','foto_3','foto_4','nombre','direccion','superficie','capacidad','provincia','localidad',
                           'barra_tragos','catering','dj','mesas_sillas','mesa_dulce','guardarropas','mozos_camareras','proyector_pantalla',
                           'recepcion','vajillas','wifi','piscina','id_servicio_inmueble','id_categoria','precio','fecha_publicacion'];

    protected $guarded = ['id'];

    //Relaciones
    public function servicios_inmueble(){
        return $this->hasMany('App\Servicio_Inmueble');
    }

    public function categorias(){
        return $this->belongsTo('App\Categoria');
    }



}

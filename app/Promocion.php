<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Promocion extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'promocions';
    protected $fillable = ['nombre','descripcion','monto','foto','id_servicios','id_prestador'];
    protected $guarded = ['id'];

    //Relaciones
    public function servicios(){
        return $this->hasMany('App\Servicio');
    }
    public function prestador(){
        return $this->hasOne('App\Prestador')
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Alquiler extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'alquilers';
    protected $fillable = ['nombre','fecha','hora_desde','hora_hasta','direccion','monto','tipo_pago','estado_pago','id_servicio','id_cliente'];
    protected $guarded = ['id'];

    //Relaciones
    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }

    public function servicio(){
        return $this->hasMany('App\Servicio');
    }
    
}

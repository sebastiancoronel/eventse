<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserva extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'reservas';
    protected $fillable = ['fecha','hora_desde','hora_hasta','direccion','monto','concretado','opinion_agregada', 'id_servicio' ,'id_prestador' , 'user_id'];

    //Relaciones
    public function servicios(){
        return $this->hasMany('App\Servicio');
    }
    public function clientes(){
        return $this->belongsTo('App\Cliente');
    }
}

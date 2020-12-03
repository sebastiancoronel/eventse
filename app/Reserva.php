<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserva extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'reservas';
    protected $fillable = ['nombre','fecha','hora_desde','hora_hasta','direccion','monto','id_servicio', 'id_prestador' ,'user_id'];
    protected $guarded = ['id'];

    //Relaciones
    public function servicios(){
        return $this->hasMany('App\Servicio');
    }
    public function clientes(){
        return $this->belongsTo('App\Cliente');
    }
}

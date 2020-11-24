<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $table = 'presupuestos';
    protected $fillable = ['id_servicio','id_prestador','user_id','fecha','hora_desde','hora_hasta','direccion','barrio','monto','estado','pregunta','respuesta'];
}

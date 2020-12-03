<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Presupuesto extends Model
{
    use SoftDeletes;
    protected $table = 'presupuestos';
    protected $fillable = ['id_servicio','id_prestador','user_id','fecha','hora_desde','hora_hasta','direccion','barrio','monto','estado','pregunta','respuesta'];
}

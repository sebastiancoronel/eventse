<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracteristicasPorPresupuesto extends Model
{
    protected $table = 'caracteristicas_por_presupuestos';
    protected $fillable = [ 'id_presupuesto', 'id_servicio' ,'id_caracteristica' ];
}

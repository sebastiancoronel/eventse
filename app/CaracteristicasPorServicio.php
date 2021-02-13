<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
class CaracteristicasPorServicio extends Model
{
    // use SoftDeletes;

    protected $table = 'caracteristicas_por_servicios';
    protected $fillable = [ 'id_servicio', 'id_caracteristica' ];
}

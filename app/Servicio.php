<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Servicio extends Model
{
    use softDeletes;

    protected $table = 'servicios';
    protected $fillable = ['nombre','descripcion','foto_1','foto_2','foto_3','foto_4','precio','precio_a_convenir', 'moderado' , 'aprobado' ,'id_categoria','id_prestador'];
}

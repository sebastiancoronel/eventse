<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Empleado extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'empleados';
    protected $fillable = ['nombre','apellido','dni','direccion','telefono','rol'];
    protected $guard = ['id'];

    //Relaciones
    public function prestadores(){
        return $this->belongsTo('App\Prestador');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestador extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'prestadors';
    protected $fillable = ['nombre','apellido','foto','provincia','localidad','direccion','email','telefono','id_categoria','id_empleados','id_servicios'];
    protected $guarded = ['id'];

    //Relaciones
    public function empleados(){
        return $this->hasMany('App\Empleado');
    }
    public function servicios(){
        return $this->hasMany('App\Servicio');
    }
}

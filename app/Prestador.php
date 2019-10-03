<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestador extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'prestadors';
    protected $fillable = ['nombre','apellido','email','telefono','dni','contraseña','id_empleados','id_servicios','id_inmueble'];
    protected $guarded = ['id'];
    
    //Relaciones
    public function empleados(){
        return $this->hasMany('App\Empleado');
    }
    public function servicios(){
        return $this->hasMany('App\Servicio');
    }
    public function inmuebles(){
        return $this->hasMany('App\Inmueble');
    }
}

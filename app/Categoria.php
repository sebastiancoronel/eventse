<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Categoria extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'categorias';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];

    //Relaciones
    public function servicios(){
        return $this->hasMany('App\Servicio');
    }
    
    public function inmuebles(){
        return $this->hasMany('App\Inmueble');
    }
}

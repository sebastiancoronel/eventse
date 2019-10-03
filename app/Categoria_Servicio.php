<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria_Servicio extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'categoria_servicios';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];

    //Relaciones
    public function servicios(){
        return $this->hasMany('App\Servicio');
    }
}

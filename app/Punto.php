<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Punto extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'puntos';
    protected $fillable = ['cantidad','id_clientes'];
    protected $guarded = ['id'];

    //Relaciones
    public function clientes(){
        return $this->hasOne('App\Cliente');
    }

}

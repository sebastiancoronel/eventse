<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provincia extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'provincias';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];

    //Relaciones
    public function localidad(){
        return $this->hasMany('App\Localidad');
    }
}

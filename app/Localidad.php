<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Localidad extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'localidads';
    
    protected $fillable = ['nombre','id_provincia'];
    protected $guarded = ['id'];

    //Relaciones
    public function provincia(){
        return $this->belongsTo('App\Provincia');
    }
}

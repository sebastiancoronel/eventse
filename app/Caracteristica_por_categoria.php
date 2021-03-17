<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Caracteristica_por_categoria extends Model
{
    use SoftDeletes;

    protected $table = 'caracteristica_por_categorias';
    protected $fillable = ['id_categoria','id_caracteristica'];
    protected $dates = ['deleted_at'];

}

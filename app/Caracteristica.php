<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Caracteristica extends Model
{
    use SoftDeletes;
    
    protected $table = 'caracteristicas';
    protected $fillable = ['nombre'];
    protected $dates = ['deleted_at'];
}

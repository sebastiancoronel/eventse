<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $table = 'opinions';
    protected $fillable = [ 'opinion', 'id_servicio', 'id_prestador' , 'user_id' ];
}

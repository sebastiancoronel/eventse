<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'notificacions';
    protected $fillable = [ 'user_id_notificar', 'user_id_trigger', 'id_evento', 'visto' ];
}

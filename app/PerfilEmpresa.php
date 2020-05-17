<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerfilEmpresa extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];
  protected $table = 'perfil_empresas';
  protected $fillable = ['nombre','foto','ubicacion'];
  protected $guarded = ['id'];

  //Relaciones
  public function users(){
    return $this->hasOne('App\User');
  }
}

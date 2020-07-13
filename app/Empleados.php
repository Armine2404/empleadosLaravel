<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $fillable= ['firstName','email','lastName','phone', 'empresas_id'];
  public function empresa()
  {
      return $this->belongsTo(Empresa::class);
  }
 
}

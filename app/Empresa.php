<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable= ['name','email','website','logo'];
    public function empleados()
    {
        return $this->hasMany(Empleados::class);
    }
}

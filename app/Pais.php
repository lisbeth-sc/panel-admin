<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    public function empresas(){
        return $this->hasMany(Empresa::class);
    }

    public function personas(){
        return $this->hasMany(Persona::class);
    }
}

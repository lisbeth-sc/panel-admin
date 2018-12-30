<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{

    public function personas(){
        return $this->hasMany(Persona::class);
    }
}

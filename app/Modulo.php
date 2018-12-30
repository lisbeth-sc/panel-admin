<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    public function funcionalidades(){
        return $this->hasMany(Funcionalidad::class);
    }
    public function paquetePrivilegio(){
        return $this->hasMany(PaquetePrivilegio::class);
    }
}

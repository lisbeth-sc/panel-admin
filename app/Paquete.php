<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    public function paquetePrivilegio(){
        return $this->hasMany(PaquetePrivilegio::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoContacto extends Model
{
    public function contactos(){
        return $this->hasMany(Contacto::class);
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public function tipoContacto()
    {
        return $this->belongsTo(TipoContacto::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}

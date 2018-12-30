<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function contactos()
    {
        return $this->hasMany(Contacto::class);
    }

    public function pais(){
        return $this->belongsTo(Pais::class);
    }
    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tipoCliente(){
        return $this->belongsTo(TipoCliente::class);
    }

}

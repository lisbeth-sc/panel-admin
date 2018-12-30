<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaquetePrivilegio extends Model
{
    public function paquete()
    {
        return $this->belongsTo(Paquete::class);
    }

    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }

    public function funcionadlidad()
    {
        return $this->belongsTo(Funcionalidad::class);
    }
}

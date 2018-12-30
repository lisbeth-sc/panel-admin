<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionalidad extends Model
{
    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }

    public function paquetePrivilegio()
    {
        return $this->hasMany(PaquetePrivilegio::class);
    }
}

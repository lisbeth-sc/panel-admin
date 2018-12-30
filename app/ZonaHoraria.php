<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZonaHoraria extends Model
{
    public function empresas(){
        return $this->hasMany(Empresa::class);
    }
}

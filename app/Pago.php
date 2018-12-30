<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    public function empresas(){
        return $this->hasMany(Empresa::class);
    }
}

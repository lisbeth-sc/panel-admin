<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    //***/
    public function empresas(){
        return $this->hasMany(Empresa::class);
    }
}

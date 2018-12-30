<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    public function tipoProductos(){
        return $this->hasMany(TipoProducto::class);
    }


}

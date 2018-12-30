<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impuesto extends Model
{
    public function tipoProductos(){
        return $this->hasMany(TipoProducto::class);
    }
    public function tipoServicios(){
        return $this->hasMany(TipoServicio::class);
    }
}

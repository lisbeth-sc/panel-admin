<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadEconomica extends Model
{
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tipoProductos(){
        return $this->hasMany(TipoProducto::class);
    }
    public function tipoServicios(){
        return $this->hasMany(TipoServicio::class);
    }
}

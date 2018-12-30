<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    public function tipoProducto()
    {
        return $this->belongsTo(TipoProducto::class);
    }

    public function tipoServicio()
    {
        return $this->belongsTo(TipoServicio::class);
    }
}

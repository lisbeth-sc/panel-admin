<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subgrupo extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function tipoProductos(){
        return $this->hasMany(TipoProducto::class);
    }
}

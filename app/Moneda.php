<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    public static function getSelect()
    {
        return DB::table('monedas')
            ->where('estado_id', '=', 1)
            ->orderBy('descripcion', 'asc')
            ->select(DB::raw("CONCAT_WS(' ',descripcion,' - ',simbolo) AS descripcion"), 'id')
            ->pluck('descripcion', 'id')->toArray();
    }


    /******/
    public function empresas()
    {
        return $this->belongsToMany(Empresa::class);
    }

    public function precioEmpresa()
    {
        return $this->hasMany(Empresa::class);
    }
    public function tipoProductos(){
        return $this->hasMany(TipoProducto::class);
    }
    public function tipoServicios(){
        return $this->hasMany(TipoServicio::class);
    }
}

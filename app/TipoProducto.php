<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    public function precios()
    {
        return $this->hasMany(Precio::class);
    }

    public function subgrupo()
    {
        return $this->belongsTo(Subgrupo::class);
    }

    public function unidadMedida()
    {
        return $this->belongsTo(UnidadMedida::class);
    }

    public function unidadMedidaAlternativa()
    {
        return $this->belongsTo(UnidadMedida::class, 'unidad_medida_alternativa_id');
    }

    public function actividadEconomica()
    {
        return $this->belongsTo(ActividadEconomica::class);
    }

    public function impuesto()
    {
        return $this->belongsTo(Impuesto::class);
    }

    public function moneda()
    {
        return $this->belongsTo(Moneda::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaEstado extends Model
{
    public function empresas()
    {
        return $this->hasMany(Empresa::class);
    }
}

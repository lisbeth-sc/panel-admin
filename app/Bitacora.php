<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

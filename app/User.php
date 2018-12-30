<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'ci', 'idioma_id', 'celular_telefono'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function idioma()
    {
        return $this->belongsTo(Idioma::class);
    }

    /**registra**/
    public function actividadesEconomicas()
    {
        return $this->hasMany(ActividadEconomica::class);
    }

    public function almacenes()
    {
        return $this->hasMany(Almacen::class);
    }

    public function bitacoras()
    {
        return $this->hasMany(Bitacora::class);
    }

    public function contactos()
    {
        return $this->hasMany(Contacto::class);
    }
    public function grupos(){
        return $this->hasMany(Grupo::class);
    }

    public function personas(){
        return $this->hasMany(Persona::class);
    }
    public function subgrupo(){
        return $this->hasMany(Subgrupo::class);
    }
    public function tipoProductos(){
        return $this->hasMany(TipoProducto::class);
    }
    public function tipoServicios(){
        return $this->hasMany(TipoServicio::class);
    }
}

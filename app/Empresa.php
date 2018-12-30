<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['numero', 'nombre_comercial', 'nombre_comercial_legal',
        'inquilino', 'nit', 'ciudad', 'texto_razon_social', 'texto_numero_contribuyente', 'copia_correo',
        'observacion', 'logo', 'logotipo', 'logo_hoja', 'imagen_fondo', 'descripcion', 'pie_pagina', 'saludo', 'glosa', 'password', 'email_dias_disponibles', 'precio_monto','precio_moneda_id','precio_descripcion','centro_costo', 'habilitar_fecha_vp_vs',
        'habilitar_precio_vp_vs', 'habilitar_descuento_vp_vs', 'lector_barra', 'habilitar_password', 'cuenta_bancaria_vp_vs', 'email_ver_deuda', 'email_metodo_pago', 'rubro_id', 'pais_id', 'zona_horaria_id', 'paquete_id', 'estado','paquete_dias_prueba','pago_id','empresa_estado_id',
    ];

    public static function getNextNumeroEmpresa()
    {
        $year = Carbon::now()->year;
        $count = Empresa::whereYear('created_at', $year)->count();
        return $year . '/' . ($count + 1);
    }

    public static function createFromRegister($data)
    {
        return Empresa::create([
            'numero' => self::getNextNumeroEmpresa(),
            'nombre_comercial' => $data['nombre_empresa'],
            'nit' => $data['nit'],
            'pais_id' => $data['pais_id'],
            'ciudad' => $data['ciudad'],
        ]);
    }

    public function updateData(Request $request)
    {
        $this->nombre_comercial = $request->nombre_comercial;
        $this->inquilino = $request->inquilino;
        $this->nit = $request->nit;
        $this->rubro_id = $request->rubro_id;
        $this->pais_id = $request->pais_id;
        $this->ciudad = $request->ciudad;
        $this->zona_horaria_id = $request->zona_horaria_id;
        $this->copia_correo = $request->copia_correo;
        $this->sitio_web = $request->sitio_web;
        $this->observacion = $request->observacion;
        $this->habilitar_fecha_vp_vs = $request->habilitar_fecha_vp_vs;
        $this->habilitar_precio_vp_vs = $request->habilitar_precio_vp_vs;
        $this->habilitar_limite_credito = $request->habilitar_limite_credito;
        $this->habilitar_lv = $request->habilitar_lv;

        if ($request->moneda_id) {
            foreach ($request->moneda_id as $key => $value) {
                $this->monedas()->attach($value);
            }

        }
        $this->texto_razon_social = $request->texto_razon_social;
        $this->numero_contribuyente = $request->numero_contribuyente;
        $this->habilitar_password = $request->habilitar_password;
        $this->centro_costo = $request->centro_costo;
        $this->habilitar_descuento_vp_vs = $request->habilitar_descuento_vp_vs;
        $this->lector_barra = $request->lector_barra;
        $this->cuenta_bancaria_vp_vs = $request->cuenta_bancaria_vp_vs;
        $this->email_dias_disponibles = $request->email_dias_disponibles;
        $this->email_ver_deuda = $request->email_ver_deuda;
        $this->email_metodo_pago = $request->email_metodo_pago;
        $this->descripcion = $request->descripcion ? returnHTMLText($request->descripcion, $request->id) : null;
        $this->pie_pagina = $request->pie_pagina ? returnHTMLText($request->pie_pagina, $request->id) : null;
        $this->saludo = $request->saludo ? returnHTMLText($request->saludo, $request->id) : null;
        $this->glosa = $request->glosa ? returnHTMLText($request->glosa, $request->id) : null;

    }

    /******/
    public function getRubro()
    {
        return $this->rubro ? $this->rubro->descripcion : null;
    }

    public function getPais()
    {
        return $this->pais ? $this->pais->descripcion : null;
    }

    public function getZonaHoraria()
    {
        return $this->zonaHoraria ? $this->zonaHoraria->descripcion : null;
    }

    public function getResponsablePropietario()
    {
        return $this->users->first();
    }

    public function getFechaVencimiento()
    {
        return parseDatetime($this->fecha_vencimiento);
    }

    /****/
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function rubro()
    {
        return $this->belongsTo(Rubro::class);
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

    public function zonaHoraria()
    {
        return $this->belongsTo(ZonaHoraria::class);
    }

    public function monedas()
    {
        return $this->belongsToMany(Moneda::class);
    }

    public function pago()
    {
        return $this->belongsTo(Pago::class);
    }

    public function precioMoneda(){
        return $this->belongsTo(Moneda::class,'precio_moneda_id');
    }
    public function empresaEstado(){
        $this->belongsTo(EmpresaEstado::class);
    }

    public function actividadesEconomicas(){
        return $this->hasMany(ActividadEconomica::class);
    }

    public function almacenes(){
        return $this->hasMany(Almacen::class);
    }

    public function bitacoras(){
        return $this->hasMany(Bitacora::class);
    }

    public function grupos(){
        return $this->hasMany(Grupo::class);
    }

    public function personas(){
        return $this->hasMany(Persona::class);
    }
    public function tipoProductos(){
        return $this->hasMany(TipoProducto::class);
    }
    public function tipoServicios(){
        return $this->hasMany(TipoServicio::class);
    }
}

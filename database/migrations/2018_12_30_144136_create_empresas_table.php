<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero');
            $table->string('nit')->nullable();
            /**ci_cop es lo mismo que nit**/
            $table->string('nombre_comercial')->nullable();
            $table->string('nombre_comercial_legal')->nullable();
            $table->string('inquilino')->nullable();
            $table->string('texto_razon_social')->nullable();
            $table->string('texto_numero_contribuyente')->nullable();
            $table->string('ciudad')->nullable();
            $table->date('fecha_vencimiento')->nullable();

            $table->string('copia_correo')->nullable();
            $table->string('sitio_web')->nullable();
            $table->longText('observacion')->nullable();


            $table->longText('descripcion')->nullable();
            $table->longText('pie_pagina')->nullable();
            $table->longText('saludo')->nullable();
            $table->longText('glosa')->nullable();

            $table->string('password')->nullable();
            $table->unsignedInteger('email_dias_disponibles')->nullable();
            $table->float('precio_monto')->nullable();
            $table->unsignedInteger('precio_moneda_id')->nullable();
            $table->string('precio_descripcion')->nullable();

            $table->boolean('centro_costo')->nullable();
            $table->boolean('habilitar_fecha_vp_vs')->nullable();
            $table->boolean('habilitar_precio_vp_vs')->nullable();
            $table->boolean('habilitar_descuento_vp_vs')->nullable();
            $table->boolean('habilitar_limite_credito')->nullable();
            $table->boolean('habilitar_lv')->nullable();
            $table->boolean('lector_barra')->nullable();
            $table->boolean('habilitar_password')->nullable();
            $table->boolean('cuenta_bancaria_vp_vs')->nullable();
            $table->boolean('email_ver_deuda')->nullable();
            $table->boolean('email_metodo_pago')->nullable();
            $table->boolean('habilitar_paquete_prueba')->nullable();

            $table->unsignedInteger('paquete_dias_prueba')->nullable();

            $table->string('logo')->nullable();
            $table->string('logotipo')->nullable();
            $table->string('logo_hoja')->nullable();
            $table->string('imagen_fondo')->nullable();

            $table->unsignedInteger('rubro_id')->nullable();
            $table->unsignedInteger('pais_id');
            $table->unsignedInteger('zona_horaria_id')->nullable();
            $table->unsignedInteger('paquete_id')->nullable();
            $table->unsignedInteger('empresa_estado_id')->nullable();
            $table->unsignedInteger('pago_id')->nullable();

            $table->boolean('estado')->default(true);
            $table->timestamps();

            $table->foreign('rubro_id')->references('id')->on('rubros');
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->foreign('zona_horaria_id')->references('id')->on('zona_horarias');
            $table->foreign('paquete_id')->references('id')->on('paquetes');
            $table->foreign('precio_moneda_id')->references('id')->on('monedas');
            $table->foreign('empresa_estado_id')->references('id')->on('empresa_estados');

            $table->foreign('pago_id')->references('id')->on('pagos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}

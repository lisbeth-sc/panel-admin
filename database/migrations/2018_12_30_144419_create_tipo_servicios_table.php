<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->longText('descripcion')->nullable();

            $table->unsignedInteger('actividad_economica_id')->nullable();
            $table->unsignedInteger('impuesto_id')->nullable();
            $table->unsignedInteger('moneda_id');

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('empresa_id');
            $table->boolean('estado')->default(true);
            $table->timestamps();
            $table->foreign('actividad_economica_id')->references('id')->on('actividad_economica');
            $table->foreign('impuesto_id')->references('id')->on('impuestos');
            $table->foreign('moneda_id')->references('id')->on('monedas');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('empresa_id')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_servicios');
    }
}

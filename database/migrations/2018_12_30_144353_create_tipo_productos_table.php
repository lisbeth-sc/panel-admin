<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->nullable();
            $table->string('nombre');
            $table->float('conversiones')->nullable();
            $table->integer('stock_minimo');
            $table->unsignedInteger('subgrupo_id')->nullable();
            $table->unsignedInteger('unidad_medida_id')->nullable();

            $table->unsignedInteger('unidad_medida_alternativa_id')->nullable();
            $table->unsignedInteger('actividad_economica_id')->nullable();
            $table->unsignedInteger('impuesto_id')->nullable();
            $table->longText('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->unsignedInteger('moneda_id');

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('empresa_id');
            $table->boolean('estado')->default(true);
            $table->timestamps();
            $table->foreign('subgrupo_id')->references('id')->on('subgrupos');
            $table->foreign('unidad_medida_id')->references('id')->on('unidad_medidas');
            $table->foreign('unidad_medida_alternativa_id')->references('id')->on('unidad_medidas');

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
        Schema::dropIfExists('tipo_productos');
    }
}

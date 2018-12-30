<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            $table->increments('id');
            $table->float('monto');
            $table->float('descuento')->nullable();
            $table->unsignedInteger('tipo_servicio_id')->nullable();
            $table->unsignedInteger('tipo_producto_id')->nullable();
            $table->boolean('estado')->default(true);
            $table->timestamps();
            $table->foreign('tipo_servicio_id')->references('id')->on('tipo_servicios');
            $table->foreign('tipo_producto_id')->references('id')->on('tipo_productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('precios');
    }
}

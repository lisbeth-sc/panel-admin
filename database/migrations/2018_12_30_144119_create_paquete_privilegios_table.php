<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetePrivilegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquete_privilegios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paquete_id')->index();
            $table->unsignedInteger('modulo_id');
            $table->unsignedInteger('funcionalidad_id');
            $table->boolean('nuevo');
            $table->boolean('modificar');
            $table->boolean('eliminar');
            $table->boolean('listar');
            $table->boolean('reporte');
            $table->integer('cantidad_registros_x_mes')->nullable();
            $table->integer('cantidad_registros_unicos')->nullable();

            $table->boolean('estado')->default(true);
            $table->foreign('paquete_id')->references('id')->on('paquetes');
            $table->foreign('modulo_id')->references('id')->on('modulos');
            $table->foreign('funcionalidad_id')->references('id')->on('funcionalidades');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquete_privilegios');
    }
}

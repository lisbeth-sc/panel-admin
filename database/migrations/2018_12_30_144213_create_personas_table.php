<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_cliente');
            $table->string('ci_nit')->nullable();
            $table->string('nombre_comercial');
            $table->string('razon_social');
            $table->string('celular_telefono')->nullable();
            $table->string('email')->nullable();

            $table->unsignedInteger('pais_id')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('direccion')->nullable();
            $table->dateTime('fecha_trabajo')->nullable();
            $table->string('cuenta_bancaria')->nullable();
            $table->string('numero_cuenta_bancaria')->nullable();
            $table->string('vendedor')->nullable();
            $table->float('limite_credito')->nullable();

            $table->longText('descripcion')->nullable();



            $table->unsignedInteger('empresa_id');

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('tipo_cliente_id')->nullable();

            $table->boolean('is_cliente')->default(false);
            $table->boolean('is_proveedor')->default(false);
            $table->boolean('estado')->default(true);
            $table->timestamps();
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->foreign('user_id')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->string('cargo')->nullable();
            $table->string('celular_telefono')->nullable();
            $table->string('interno')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('email')->nullable();
            $table->string('email_corporativo')->nullable();
            $table->string('email_alternativo')->nullable();
            $table->unsignedInteger('tipo_contacto_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('persona_id');
            $table->boolean('estado')->default(true);
            $table->timestamps();
            $table->foreign('tipo_contacto_id')->references('id')->on('tipo_contactos');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('persona_id')->references('id')->on('personas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactos');
    }
}

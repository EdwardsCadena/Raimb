<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('CodRol_Usuario')->unsigned();
            $table->integer('IdTipoDc_Usuario')->unsigned();
            $table->char('IdNumeIden',12)->primary();
            $table->string('Primer_Nombre',55);
            $table->string('Segundo_Nombre',55)->nullable();
            $table->string('Primer_Apellido',55);
            $table->string('Segundo_Apellido',55)->nullable();
            $table->bigInteger('NumTelefonico');
            $table->string('Correo_Electronica',75)->unique();
            $table->integer('IdEstado_Usuario')->unsigned();
            $table->integer('IdFicha_Usuario')->unsigned();
            $table->string('UserName',55)->nullable();
            $table->string('Contraseña',55)->nullable();
            $table->foreign('CodRol_Usuario')->references('IdRoles')->on('roles');
            $table->foreign('IdTipoDc_Usuario')->references('IdTipos')->on('tiposdocumentos');
            $table->foreign('IdEstado_Usuario')->references('IdEstados')->on('estadosaprendices');
            $table->foreign('IdFicha_Usuario')->references('IdFichas')->on('fichas');
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
        Schema::dropIfExists('usuarios');
    }
}

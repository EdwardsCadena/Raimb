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
            $table->integer('FkCodRolUsuario')->unsigned();
            $table->integer('FkTipoDcUsuario')->unsigned();
            $table->char('IdNumeIden',12);
            $table->string('PrimerNombre',55);
            $table->string('SegundoNombre',55)->nullable();
            $table->string('PrimerApellido',55);
            $table->string('SegundoApellido',55)->nullable();
            $table->bigInteger('NumTelefonico');
            $table->string('CorreoElectronica',75)->unique();
            $table->integer('FkEstadoUsuario')->unsigned();
            $table->integer('FkFichaUsuario')->unsigned();
            $table->string('UserName',55)->nullable();
            $table->string('Contraseña',55)->nullable();
            $table->foreign('FkCodRolUsuario')->references('IdRoles')->on('roles');
            $table->foreign('FkTipoDcUsuario')->references('IdTipos')->on('tiposdocumentos');
            $table->foreign('FkEstadoUsuario')->references('IdEstados')->on('estadosaprendices');
            $table->foreign('FkFichaUsuario')->references('IdFichas')->on('fichas');
            $table->timestamps();
            $table->primary(['IdNumeIden','FkCodRolUsuario','FkTipoDcUsuario']);
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

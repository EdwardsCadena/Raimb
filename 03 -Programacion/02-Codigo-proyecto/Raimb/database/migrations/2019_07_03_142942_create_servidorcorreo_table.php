<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServidorcorreoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servidorcorreo', function (Blueprint $table) {
            $table->increments('IdServidor');
            $table->string('RecupearcionDeContraseña',60);
            $table->string('CorfimarCuenta',60);
            $table->string('CambiarContraseña',60);
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
        Schema::dropIfExists('servidorcorreo');
    }
}

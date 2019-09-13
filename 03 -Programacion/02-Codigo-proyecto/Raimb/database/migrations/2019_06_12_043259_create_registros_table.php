<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('IdRegistros')->unique();
            $table->dateTime('FechaHoraIngreso');
            $table->dateTime('FechaHoraSalida');
            $table->integer('FkCupoRegistro')->unsigned();
            $table->foreign('FkCupoRegistro')->references('IdCupos')->on('cupos');
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
        Schema::dropIfExists('registros');
    }
}

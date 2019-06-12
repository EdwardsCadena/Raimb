<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosregistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculosregistros', function (Blueprint $table) {
            $table->string('IdVehiculo_Registro',12)->unsigned();
            $table->integer('IdRegistro_Registro')->unsigned();
            $table->foreign('IdVehiculo_Registro')->references('IdVehiculos')->on('vehiculos');
            $table->foreign('IdRegistro_Registro')->references('IdRegistros')->on('registros');
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
        Schema::dropIfExists('vehiculosregistros');
    }
}

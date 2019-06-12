<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->string('IdVehiculos',12)->primary();
            $table->string('ColorVehiculo',55);
            $table->char('IdNumeIden_Vehiculo',12)->unsigned();
            $table->integer('IdModelo_Vehiculo')->unsigned();
            $table->integer('IdMarca_Vehiculo')->unsigned();
            $table->foreign('IdNumeIden_Vehiculo')->references('IdNumeIden')->on('usuarios');
            $table->foreign('IdModelo_Vehiculo')->references('IdModelosVehiculos')->on('modelosvehiculos');
            $table->foreign('IdMarca_Vehiculo')->references('IdMarcasVehiculos')->on('marcasvehiculos');
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
        Schema::dropIfExists('vehiculos');
    }
}

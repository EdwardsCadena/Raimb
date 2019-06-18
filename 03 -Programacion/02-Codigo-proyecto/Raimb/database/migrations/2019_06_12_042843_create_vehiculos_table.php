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
            $table->char('IdVehiculos',12)->primary();
            $table->string('ColorVehiculo',55);
            $table->char('FkNumeIdenVehiculo',12);
            $table->integer('FkModeloVehiculo')->unsigned();
            $table->integer('FkMarcaVehiculo')->unsigned();
            $table->integer('FkClaseVehiculo')->unsigned();
            $table->foreign('FkClaseVehiculo')->references('IdClasesvehiculos')->on('clasesvehiculos');
            $table->foreign('FkNumeIdenVehiculo')->references('IdNumeIden')->on('usuarios');
            $table->foreign('FkModeloVehiculo')->references('IdModelosVehiculos')->on('modelosvehiculos');
            $table->foreign('FkMarcaVehiculo')->references('IdMarcasVehiculos')->on('marcasvehiculos');
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

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
            $table->char('FkVehiculoRegistro',12)->unique();
            $table->integer('FkRegistroRegistro')->unsigned()->unique();
            $table->foreign('FkVehiculoRegistro')->references('IdVehiculos')->on('vehiculos');
            $table->foreign('FkRegistroRegistro')->references('IdRegistros')->on('registros');
            $table->timestamps();
            $table->primary(['FkVehiculoRegistro','FkRegistroRegistro']);
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

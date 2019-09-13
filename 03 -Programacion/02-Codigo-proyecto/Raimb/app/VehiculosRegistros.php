<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculosRegistros extends Model
{
    protected $table="vehiculosregistros";
    protected $primaryKey=["IdVehiculo_Registro","IdRegistro_Registro"];
}

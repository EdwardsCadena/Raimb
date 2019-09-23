<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
     protected $table="users";
     protected $primaryKey="IdNumeIden";
     protected $fillable=['Username'];
     protected  $hidden=['Contraseña'];
}

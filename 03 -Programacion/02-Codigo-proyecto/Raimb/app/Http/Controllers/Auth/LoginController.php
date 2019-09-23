<?php

namespace App\Http\Controllers\Auth;
use App\Roles;
use App\User;
use Auth;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function Inicio()
    {
        $roles = Roles::all();
        $titulo ='Login';
        return view('auth.login',compact('titulo','roles'));
    }

    public function login()
    {
        $login = $this->validate(request(),[
           'FkCodRolUsuario'=>'required|int',
           'UserName'=> 'required|string',
           'Contraseña'=>'required|string'
        ]);


        if (Auth::attempt($login)) {
           return redirect()->route('index');
        }
        return 'Rol,Usuario y Contraseña Incorrecta';

    }
}

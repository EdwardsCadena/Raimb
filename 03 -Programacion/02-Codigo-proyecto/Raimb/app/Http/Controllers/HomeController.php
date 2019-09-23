<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function login(){
        $titulo ='Login';
        return view('login.login',compact('titulo'));
    }
    public function index(){
        $titulo ='Parqueadero';
        return view('index.index',compact('titulo'));
    }
    public function roles(){
        $titulo ='Roles';
        return view('Roles.index',compact('titulo'));
    }
    public function clasevehiculos(){
        $titulo ='Clases de Vehiculos';
        return view('Clasevehiculos.index',compact('titulo'));
    }
    public function especialidad(){
        $titulo ='Especialidad';
        return view('Especialidades.index',compact('titulo'));
    }
    public function fichas(){
        $titulo ='Fichas';
        return view('Fichas.index',compact('titulo'));
    }
    public function modelovehiculo(){
        $titulo ='Modelo Vehiculos';
        return view('Modelovehiculo.index',compact('titulo'));
    }
    public function programas(){
        $titulo ='Programas';
        return view('Programas.index',compact('titulo'));
    }
    public function registros(){
        $titulo ='registros';
        return view('registros.index',compact('titulo'));
    }
    public function marcas(){
        $titulo ='Marcas de los Vehiculos';
        return view('marcavehiculos.index',compact('titulo'));
    }
    public function documento(){
        $titulo ='Documentos';
        return view('TipoDocumentos.index',compact('titulo'));
    }
    public function usuarioeli(){
        $titulo ='Eliminar Usuario';
        return view('usuarios.eliminacion',compact('titulo'));
    }
    public function crearusu(){
        $titulo='#';
        return view('usuarios.index',compact('titulo'));
    }
    public function Editarusu(){
        $titulo='Edicion de los usuarios';
        return view('usuarios.editarusuarios',compact('titulo'));
    }public function Contactenos(){
        $titulo='Contactos';
        return view('Contactos.contactos',compact('titulo'));
    }public function Tutoriales(){
        $titulo='Manejo del Aplicativo';
        return view('Tutoriales.tutorial',compact('titulo'));
    }
}

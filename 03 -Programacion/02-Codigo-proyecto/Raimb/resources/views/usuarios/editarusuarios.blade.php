@extends('layaout.layaout')
@include('layaout.navbar')
@section('content')
<br>
<div class="ui container">
    <div class="ui grid stackable ">
        <div class="row">
            <div class="ui twelve wide column">
                <div class="content centered aligned page">
                    <h2 class="ui center aligned page">Usuarios Registrados</h2>
                </div>
                <table class="ui inverted grey table">
                    <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Tipo documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Estado</th>
                        <th>Tipo vehiculo</th>
                        <th>Clase vehiculo</th>
                        <th>Placa Vehiculo</th>
                        <th>Color</th>
                        <th>Editar</th>
                        <td>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>1</td>
                        <td>wer</td>
                        <td>wer</td>
                        <td>wer</td>
                        <td>wer</td>
                        <td>wer</td>
                        <td>wer</td>
                        <td>wer</td>
                        <td>wer</td>
                        <td>wer</td>
                        <td>wer</td>
                        <td>
                            <button class="ui inverted primary button" id="click_me">Editar</button>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="ui container">
    <div class="ui modal">
        <i class="close icon red"></i>
        <br>
        <div class="ui grid stackable center aligned page">
            <div class="row">
                <div class="ui six wide column ">
                    <h2>Editar a </h2>
                    <form class="ui form" action="" method="POST">
                        <div class="ui inverted grey segment">
                            <div class="ui inverted form">
                                <div class="field">
                                    <label for="name">documento:</label>
                                    <input type="text" id="name" name="name" value="">
                                </div>
                                <div class="field">
                                    <label for="name">tipodocumento:</label>
                                    <select name="" class="ui large button center">
                                        <option>c.c</option>
                                        <option>t.i</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="name">Nombre:</label>
                                    <input type="text" id="name" name="name" value="">
                                </div>
                                <div class="field">
                                    <label for="name">Apellido:</label>
                                    <input type="text" id="name" name="name" value="">
                                </div>
                                <div class="field">
                                    <label for="name">Direccion:</label>
                                    <input type="text" id="name" name="name" value="">
                                </div>
                                <div class="field">
                                    <label for="name">Correo:</label>
                                    <input type="text" id="name" name="name" value="">
                                </div>
                                <div class="field">
                                    <label for="name">Estado:</label>
                                    <select name="" class="ui large button center">
                                        <option>Activo</option>
                                        <option>Aplazado</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="name">Tipo vehiculo:</label>
                                    <select name="" class="ui large button center">
                                        <option>Bicicleta</option>
                                        <option>Motocicleta</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="apellido">Clase vehiculo:</label>
                                    <input type="text" id="apellido" name="apellido" value="">
                                </div>
                                <div class="field">
                                    <label for="email">Placa Vehiculo:</label>
                                    <input type="email" id="email" name="email" value="">
                                </div>
                                <div class="field">
                                    <label for="email">Color:</label>
                                    <input type="email" id="email" name="email" value="">
                                </div>
                            </div>
                            <br>
                            <button class="tiny ui inverted green button" type="submit">
                                <i class="save icon"></i>Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop

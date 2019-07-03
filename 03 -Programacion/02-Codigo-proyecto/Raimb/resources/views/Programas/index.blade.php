@extends('layaout.layaout')
@include('layaout.navbar')
@section('content')
    <br>
    <br>
    <div class="ui container">
        <div class="ui grid stackable ">
            <div class="row">
                <div class="ui twelve wide column">
                    <div class="content centered aligned page">
                        <h2 class="ui center aligned page">Programas Registrados</h2>
                    </div>
                    <table class="ui inverted grey table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre del Programa</th>
                            <th>Fecha de Creacion</th>
                            <th>Fecha de Modifiacion</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <td>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>1</td>
                            <td>wer</td>
                            <td>wer</td>
                            <td>wer</td>
                            <td>
                                <form action="">

                                    <button class="tiny ui inverted primary  button" type="submit">Editar</button>

                                </form>
                            </td>
                            <td>
                                <form action="" >
                                    <button class="tiny ui inverted red button" type="submit">Eliminar</button>


                                </form>
                            </td>
                        </tr>


                        </tbody>
                    </table>
                </div>
                <div class="ui four wide column">
                    <h2>Crea Ficha</h2>
                    <form class="ui form" action="" method="">
                        <div class="ui inverted grey segment">
                            <div class="ui inverted form">
                                <div class="field">
                                    <label for="name">Numero del programa:</label>
                                    <input type="text" id="name" name="name" placeholder="Example">
                                </div>
                                <div class="field">
                                    <label for="name">Nombre de la Especialidad:</label>
                                    <select name="" class="ui large button center">
                                        <option>Teleinformatica</option>
                                        <option>Comunicaiones</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <button class="tiny ui inverted green button " type="submit">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@stop


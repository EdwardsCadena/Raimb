@extends('layaout.layaout')
@include('layaout.navbar')
@section('content')
    <br>
    <div class="ui container">
        <div class="ui grid stackable ">
            <div class="row">
                <div class="ui twelve wide column">
                    <div class="content centered aligned page">
                        <h2 class="ui center aligned page">DOCUMENTOS</h2>
                    </div>
                    <table class="ui inverted grey table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tipo Documento</th>
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
                                <form action=""  method="POST" >
                                    <button class="tiny ui inverted red button" type="submit">Eliminar</button>


                                </form>
                            </td>
                        </tr>


                        </tbody>
                    </table>
                </div>
                <div class="ui four wide column">
                    <h2>Crea Documento</h2>
                    <form class="ui form" action="" method="POST">
                        <div class="ui inverted grey segment">
                            <div class="ui inverted form">
                                <div class="field">
                                    <label for="name">Descripcion del documento:</label>
                                    <input type="text" id="name" name="name" placeholder="Example">
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


@extends('layaout.layaout')
@include('layaout.navbar')
@section('content')
    <br>
    <div class="ui two column centered grid">
        <div class="column">
            <h2>Reportes de los Vehiculos</h2>
            <div class="ui attached  segment">
                <div class="ui equal width grid">
                    <div class="column">
                        <div class='field required'>
                            <div class='field required'>
                                <label>
                                    Mes
                                </label><BR>
                                <BR>
                                <select name="" class="ui large button center">
                                    <option>Enero</option>
                                    <option>Febrero</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class='field required'>
                            <label>
                                Anual
                            </label>
                            <br>
                            <br>
                            <select name="" class="ui large button center">
                                <option>2018</option>
                                <option>2019</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="ui center algned page">
                    <button class="ui primary loading centered aligned page button">Verificar</button>
                </div>
            </div>
            <br>
            <div class="ui twelve wide column">
                <table class="ui inverted grey table">
                    <thead>
                    <tr>
                        <th>Tipo documento</th>
                        <th>Nombre Del usuario</th>
                        <th>Ficha Usuario</th>
                        <th>Placa vehiculo</th>
                        <th>Fecha</th>
                        <th>Excel</th>
                        <th>Pdf</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>1</td>
                        <td>wer</td>
                        <td>wer</td>
                        <td>wer</td>
                        <td>wer</td>
                        <td><button class="circular ui icon button">
                                <i class="file excel icon"></i>
                            </button>
                        <td><button class="circular ui icon button">
                                <i class="file pdf icon"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop


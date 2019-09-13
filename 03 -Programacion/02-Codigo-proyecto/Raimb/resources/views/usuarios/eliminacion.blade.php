@extends('layaout.layaout')
@include('layaout.navbar')
@section('content')
    <br>
<div class="ui two column centered grid">
    <div class="column">
        <h2>Eliminar Usuario</h2>
        <div class="ui attached  segment">
            <div class="ui equal width grid">
                <div class="column">
                    <div class='field required'>
                        <div class='field required'>
                            <label>
                                Cargo
                            </label><BR>
                            <BR>
                            <select name="" class="ui large button center">
                                <option>C.C</option>
                                <option>T.I</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class='field required'>
                        <label for="">Ficha</label>
                        <br>
                        <br>
                        <div class="ui icon input">
                            <i class="search icon"></i>
                            <input type="text" placeholder="Search...">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class='field required'>
                        <label>
                            Estado Aprendiz
                        </label>
                        <br>
                        <br>
                        <select name="" class="ui large button center">
                            <option>Activo</option>
                            <option>Aplazado</option>
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
                    <th>Estado Usuario</th>
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
                        <input type="checkbox" name="public">
                    </td>
                </tr>
                </tbody>
            </table>
            <form action="">
                <button class="negative ui button">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@stop


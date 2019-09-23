@extends('layaout.layaout')
@section('content')
    <div class='ui shape'>
        <div class='sides'>
            <div class='first side active'>
                <div class='ui top attached segment'>
                    <div class='content'>
                        <h2 class='ui center aligned icon header'>
                        <i class='circular inverted inverted teal users icon '></i>
                            Iniciar Sesión
                        </h2>
                    </div>

                    <form class='ui form' action="{{route('route.autentificacion')}}" method="post">
                        {{csrf_field()}}

                        <div class='field required'>
                            <label>
                                Cargo
                            </label>
                            <select name="FkCodRolUsuario" class="ui large button center">
                                @foreach($roles as $rol)
                                    <option value="{{$rol -> IdRoles}}">{{ $rol ->TipoRol }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class='field required'>
                            <label>
                                Usuario
                            </label>
                            <div class='ui left icon input'>
                                <input  type='text' name="UserName" placeholder="Ingrese su usuario">
                                <i class="user icon"></i>
                            </div>
                        </div>
                        <div class='field required'>
                            <label>
                                Contraseña
                            </label>
                            <div class="ui left icon input">
                                <input  type='password' name="Contraseña" placeholder="Ingrese su contraseña">
                                <i class="grey lock icon"></i>
                            </div>
                        </div>
                        <div class="ui centered aligned page">
                            <button class='ui primary button center aligned page' type='submit'>Login</button></div>
                    </form>
                </div>
                <button class='ui secondary bottom attached large hidden button center aligned page'>
                    <a href="">Recuperar contraseña</a>
                </button>
            </div>
        </div>
    </div>
    <a class="ui right ribbon label" id="flip-label">
        Raimb
    </a>
    <style type="text/css">
        body {
            width: 100%;
            min-height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        body {
            background: #607D8B;
            padding: 5rem 0rem;
            text-align: center;

        }
        .ui.shape {
            position: relative;
            display: inline-block !important;
            text-align: left;
        }

        #flip-label {
            position: absolute;
            left: calc(50% + 263px);
            top: 6rem;
            visibility: hidden;
        }

        .ui.segment,
        .ui.attached.button {
            width: 500px !important;

        }
        .ui.ribbon.label:after {
            border-top-color: #9E9E9E;
        }
        .ui.ribbon.label:after:hover {
            border-top-color: #9E9E9E;
        }
        .ui.segment {
            visibility: hidden;

        }
        .ui.bottom.attached.hidden.button {
            opacity: 0;
        }
    </style>

@stop

@extends('layaout.layaout')
@section('content')
    <!--<div class="ui container" >
        <div class="ui one aligned center page aligned grid " >
            <div class="column">
                <h2> Iniciar sesión</h2>
                <form action="" method="get" class="ui large form">
                    <div class="ui stacked secondary  segment">
                        <div class="field">
                            <div class="ui left icon selected">

                                <select name="Rol" class="ui large button center">
                                    <option>Soporte</option>
                                    <option>AdministradorMaster</option>
                                    <option>Administrador</option></select>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="nameuser" placeholder="Usuario" >
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="ui fluid large teal submit button">Ingresar</div>
                    </div>

                    <div class="ui error message">2</div>

                </form>


            </div>
        </div>
    </div>
    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h2 class="ui teal image header">
                <img src="" class="image">
                <div class="content">
                    Inicio de Sesión
                </div>
            </h2>
            <form class="ui large form">
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon selected">
                            <select name="Rol" class="ui large button center">
                                <option>Soporte</option>
                                <option>AdministradorMaster</option>
                                <option>Administrador</option></select>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="email" placeholder="E-mail address">
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="ui fluid large teal submit button">Login</div>
                </div>

                <div class="ui error message"></div>

            </form>

            <div class="ui message">
                New to us? <a href="#">Sign Up</a>
            </div>
        </div>
    </div>
<style type="text/css">
        body {
            background: #0f2027; /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #0f2027, #203a43, #2c5364); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        body > .grid {
            height: 100%;
        }
        .image {
            margin-top: -100px;
        }
        .column {
            max-width: 450px;
        }
    </style>-->
  <div class='ui shape'>
        <div class='sides'>
            <div class='first side active'>
                <div class='ui top attached segment'>
                    <h2 class='ui center aligned icon header'>
                        <i class='circular inverted inverted teal users icon '></i>
                        <div class='content'>
                            Iniciar Sesión
                        </div>
                    </h2>
                    <form class='ui form'>
                        <div class='field required'>
                            <label>
                                Cargo
                            </label>
                            <select name="Rol" class="ui large button center">
                                <option>Soporte</option>
                                <option>AdministradorMaster</option>
                                <option>Administrador</option>
                                <i class="grey at icon"></i>
                            </select>
                        </div>
                        <div class='field required'>
                            <label>
                                Correo
                            </label>
                            <div class='ui left icon input'>
                                <input required='true' type='email'>
                                <i class="grey at icon"></i>
                            </div>
                        </div>
                        <div class='field required'>
                            <label>
                                Contraseña
                            </label>
                            <input required='true' type='password'>
                        </div>
                        <div class='inline field'>
                            <a href="">Recuperacion de contraseña</a>
                        </div>
                        <div class='ui hidden divider'></div>

                    </form>
                </div>
                <button class='ui bottom attached large primary hidden button' type='submit'>
                    Login
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
            padding: 2rem 0rem;
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
            top: 3rem;
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

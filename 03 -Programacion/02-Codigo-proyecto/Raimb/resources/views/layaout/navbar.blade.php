<div class="ui attached inverted stackable  menu">
    <div class="item logo">
        <img src="https://image.freepik.com/vector-gratis/estacionamiento_24908-54069.jpg" />
        <a href="{{route('route.index')}}">Raimb</a>
    </div>
    <div class="ui inverted simple dropdown item">
        <strong>Usuarios</strong>
        <div class="menu">
            <div class="header">Usuarios</div>
            <a href="{{route('route.crearusu')}}" class="item"><i class="id card icon"></i>Crear Usuario</a>
            <a href="{{route('route.Editarusu')}}" class="item"><i class="euser edit icon"></i>Editar Usuario</a>
            <a href="{{route('route.usuarioeli')}}" class="item"><i class="trash alternate outline icon"></i>Eliminar Usuario</a>
        </div>
    </div>
    <div class="ui inverted simple dropdown item">
        <strong>Tablas</strong>
        <div class="menu">
            <div class="header">Tablas</div>
            <a href="{{route('route.rol')}}" class="item"><i class="users off icon"></i>Roles</a>
            <a href="{{route('route.documento')}}" class="item"><i class="id card alternate icon"></i>Tipo Documento</a>
            <a href="{{route('route.especialidad')}}"class="item"><i class="money check icon"></i>Especialidades</a>
            <a href="{{route('route.programas')}}" class="item"><i class="money check icon"></i>Programas</a>
            <a href="{{route('route.fichas')}}" class="item"><i class="money check icon"></i>Fichas</a>
            <div class="header">Vehiculos</div>
            <a href="{{route('route.clasevehiculos')}}" class="item"><i class="truck pickup icon"></i>Clase de Vehiculo</a>
            <a href="{{route('route.modelovehiculo')}}" class="item"><i class="car side icon"></i>Modelos de los Vehiculos</a>
            <a href="{{route('route.marcas')}}" class="item"><i class="car alternate icon"></i>Marca de los Vehiculos</a>
            <div class="header">Registros</div>
            <a href="{{route('route.registros')}}" class="item"><i class="download icon"></i>Reportes</a>
        </div>
    </div>
    <div class="ui inverted simple dropdown item">
        <strong>Tutoriales</strong>
        <div class="menu">
            <div class="header">Manejo del aplicativo</div>
            <a href=""  class="item"><i class="video icon"></i>Tutoriales</a>
        </div>
    </div>
    <div class="ui inverted simple dropdown item">
        <strong>Contactos</strong>
        <div class="menu">
            <div class="header">Emergencia</div>
            <a href="" class="item"><i class="phone square icon"></i>Contactos Emergencias</a>
        </div>
    </div>
    <div class="ui inverted right simple dropdown item">
        <strong>ROL</strong>
        <i class="large user circle icon"></i>
        <div class="menu">
            <div class="header">Cuenta</div>
            <a href="{{route('route.login')}}"  class="item"><i class="power off icon"></i>Cerrar Sesión</a>
        </div>
    </div>
</div>

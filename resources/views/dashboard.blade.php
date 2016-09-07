@extends('layout')
@section('content')


    <div class="container box_chica">
        <div class="row ">
            <div class="col-xs-8 ">
                <h3>Hola, {{ Auth::user()->name }}</h3>
                @if(Auth::user()->level==1)
                <h4>Bienvenido Administrador</h4>
                    <p>Usted puede usar las siguientes herramiemtas</p>
                    <ul>
                        <li><a href="{{ url('/dashboard/videos') }}">Administrar videos</a></li>
                        <li><a href="{{ url('/dashboard/ver-chicas') }}">Ver lista de chicas regstradas</a></li>
                        <li><a href="{{ url('/dashboard/ver-usuarios') }}">Ver lista de usuarios registrados</a></li>
                        <li><a href="{{ url('/dashboard/crear-chica') }}">Agregar nueva Chica</a></li>
                        <li><a href="{{ url('/dashboard/crear-video') }}">Agregar nuevo Video</a></li>
                        <li><a href="{{ url('/dashboard/categorias') }}">Ver Categorias de Videos</a></li>
                        <li><a href="{{ url('/dashboard/perfil') }}">Mi Perfil</a></li>
                        <li><a href="{{ url('/dashboard/ajustes') }}">Ajustes y Configuraciones</a></li>
                    </ul>
                @elseif(Auth::user()->level==2)
                    <h4>Bienvenido Colaborador</h4>
                    <p>Acciones para un Colaborador</p>
                    <ul>
                        <li><a href="#">Agregar Un video manualmente</a></li>
                        <li><a href="#">Administrar Videos</a></li>
                        <li><a href="#">Editar Perfil</a></li>
                    </ul>
                @elseif(Auth::user()->level==3)
                    <h4>Bienvenido Usuario Registrado</h4>
                    <p>Usted puede realizar las siguientes acciones</p>
                    <ul>
                        <li><a href="#">Ver mis comentarios</a></li>
                        <li><a href="#">Editar Perfil</a></li>
                    </ul>
                @endif
                {{---Estas condicionales se pueden hacer dentro de las rutas--}}
            </div>
            <div class="col-xs-4">
                Mas herramientas
            </div>
        </div>

    </div>

@endsection
    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Iniciar Sessiown</a></li>
        <li><a href="{{ url('/register') }}">Registrarse</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/dashboard/crear-video') }}"><i class="fa fa-btn fa-sign-out"></i>Crear Video</a></li>
                <li><a href="{{ url('/dashboard/crear-chica') }}"><i class="fa fa-btn fa-sign-out"></i>Crear Chica</a></li>
                <li><a href="{{ url('/dashboard/crear-categoria') }}"><i class="fa fa-btn fa-sign-out"></i>Crear Categoria</a></li>
                <li><a href="{{ url('/anuncio/create') }}"><i class="fa fa-btn fa-sign-out"></i>Crear Anuncio</a></li>
                <li><a href="{{ url('/register') }}"><i class="fa fa-btn fa-sign-out"></i>Crear Usuario</a></li>
                <li><a href="{{ url('/dashboard/videos') }}"><i class="fa fa-btn fa-sign-out"></i>Administrar Videos</a></li>
                <li><a href="{{ url('/dashboard/ver-chicas') }}"><i class="fa fa-btn fa-sign-out"></i>Administrar Chicas</a></li>
                <li><a href="{{ url('/dashboard/ver-usuarios') }}"><i class="fa fa-btn fa-sign-out"></i>Administrar Usuarios</a></li>
                <li><a href="{{ url('/dashboard/categorias') }}"><i class="fa fa-btn fa-sign-out"></i>Administrar Categorias</a></li>
                <li><a href="{{ url('/dashboard/ver-anuncios') }}"><i class="fa fa-btn fa-sign-out"></i>Administrar Anuncios</a></li>

            </ul>
        </li>
        <li>
            <a href="/dashboard">Dashboard</a>
        </li>
        <li>
            <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar Sesion</a>
        </li>
    @endif
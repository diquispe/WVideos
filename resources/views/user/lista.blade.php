@extends('layout')
@section('content')



        <!--Inicio contenido personzalizado-->

<div class="container">
    <div class="panel-heading">
        <span class="panel-title">Usuarios Registrados</span>
    </div>
    <div class="ultimos_videos">
        <p>Desde aqui usted puede administrar, ver o editar los siguientes items</p>

        <div class="filas-chicas">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Nivel/Usuario</th>
                    <th>email</th>
                    <th>FEC / Creacion</th>
                    <th>FEC / Modificacion
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    @include('user.partials.item', compact('users'))
                @endforeach
                </tbody>
            </table>

            {{ $users->render() }}<p>De {{ $users->total() }} Usuarios Registrados.</p>
        </div>




    </div>
</div>

@endsection
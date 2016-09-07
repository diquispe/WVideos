@extends('layout')
@section('content')


        <!-- Inicio campo personzalizado-->

<div class="container perfil">
    <div class="row">
        <div class="col-md-8">
            <h3>Estos son los datos de tu perfil <a href="#"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Modificar Perfil</a></h3>
            <hr>
            <p><b>Nombre: </b>{{Auth::user()->name}} </p>
            <p><b>Email: </b>{{Auth::user()->email}} </p>
            <p><b>Contraseña: </b> ************ </p>

        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>


@endsection
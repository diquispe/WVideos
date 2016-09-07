@extends('layout')
@section('content')

    <!--Inicio contenido personzalizado-->

    <div class="container">
        <div class="panel-heading">

            <span class="panel-title">Últimas Scorts
                <?php
                if(isset($_GET['pais']))
                    echo  $_GET['pais'];
                    else {
                        echo "PERU";
                    }
                ?>

            </span>
        </div>
        <div class="ultimos_videos">

            <div class="filas-chicas">
                {{ Form::open(['route' => 'chicas.scorts', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search' ]) }}
                    <div class="form-group">
                        <p class="form-control-static">Haz una Busqueda</p>
                        {{ Form::text('nickname', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Scort']) }}
                    </div>
                <div class="form-group">
                    {{ Form::select('pais', config('options.paises'), null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::text('ciudad', null ,  ['class' => 'form-control', 'placeholder' => 'Ciudad']) }}
                </div>

                    <button type="submit" class="btn btn-default">Buscar</button>
                {{ Form::close() }}
                <hr>
                <p>Hemos encontrado {{ $chicas->total() }} scorts segun tu busqueda.</p>
                <div class="row">
                    @foreach($chicas as $chica)
                        @include('chicas.partials.scorts_item', compact('chicas'))
                    @endforeach
                </div>
                {{ $chicas->total() }} Chicas regisradas en nuestra pagina.</p>
            </div>




        </div>
    </div>

@endsection
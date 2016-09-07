@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">LIsta de Categorias</div>

                    <div class="panel-body">
                        <table class="table table-bordered">

                        @foreach($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->name }}</td>
                                    <td><img src="/uploads/{{$categoria->imagen}}" alt="" width="60" height="60"></td>
                                    <td><a href="/categoria/{{ $categoria->id }}/edit" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> EDITAR</a>
                                        <a href="/categoria/{{ $categoria->id }}/destroy" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"  class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> ELIMINAR</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

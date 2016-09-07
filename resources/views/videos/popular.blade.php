@extends('layout')
@section('content')

        <!--Inicio contenido personzalizado-->

<div class="container">
    <div class="panel-heading">
        <span class="panel-title">Últimos Videos</span>
    </div>
    <div class="ultimos_videos">

        <div class="row">
            <div class="col-xs-2"><img src="{{ asset('images/imagen.jpg') }} "></div>
            <div class="col-xs-2"><img src="{{ asset('images/imagen.jpg') }} "></div>
            <div class="col-xs-2"><img src="{{ asset('images/imagen.jpg') }} "></div>
            <div class="col-xs-2"><img src="{{ asset('images/imagen.jpg') }} "></div>
            <div class="col-xs-2"><img src="{{ asset('images/imagen.jpg') }} "></div>
            <div class="col-xs-2"><img src="{{ asset('images/imagen.jpg') }} "></div>
            <div class="col-xs-2"><img src="{{ asset('images/imagen.jpg') }} "></div>
        </div>

        <div class="paginacion text-center">
            <nav>
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection
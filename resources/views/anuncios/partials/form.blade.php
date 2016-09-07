
<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
    {{Form::label('title', 'Titulo del Anuncio')}}
    {{Form::text('title', null, [
        'class' => 'form-control',
        'placeholder' => 'Agrega un titulo  a tu anuncio',
        'value' => 'Valor por defecto',
    ])}}
    @if ($errors->has('title'))
        <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
    {{Form::label('status', 'Estado de tu anuncio')}}
    {{Form::select('status', ['no_publicado' => 'No Publicado', 'publicado' => 'Publicado'], null, ['class' => 'form-control'])}}
    @if ($errors->has('status'))
        <span class="help-block">
            <strong>{{ $errors->first('status') }}</strong>
        </span>
    @endif
</div>


<div class="form-group {{ $errors->has('url') ? ' has-error' : '' }}">
    {{Form::label('url', 'URL a donde apuntará el banner')}}
    {{Form::text('url', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingresa una URL'
    ])}}
    @if ($errors->has('url'))
        <span class="help-block">
                        <strong>{{ $errors->first('url') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}">
    <h3>Imagen Principal</h3>
    {{Form::label('imagen', 'imagen')}}
    {{Form::file('imagen')}}
    @if ($errors->has('imagen'))
        <span class="help-block">
            <strong>{{ $errors->first('imagen') }}</strong>
        </span>
    @endif
    <p>Dimensiones para las fotos</p>
    <ul>
        <li><b>Superior :</b> 300 pixeles (ancho) x 200 pixeles (alto)</li>
        <li><b>Inferior :</b> 300 pixeles (ancho) x 200 pixeles (alto)</li>
        <li><b>Primer banner al costado del Video :</b> 300 pixeles (ancho) x 200 pixeles (alto)</li>
        <li><b>Segundo banner al costado del Video :</b> 300 pixeles (ancho) x 200 pixeles (alto)</li>
        <li><b>Anuncio en la paginas de las chicas :</b> 300 pixeles (ancho) x 200 pixeles (alto)</li>
    </ul>
</div>


<div class="form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}">
    {{Form::label('descripcion', 'Descripcion del anuncio')}}
    {{Form::textarea('descripcion', null, [
        'rows'  => 10,
        'class' => 'form-control',
        'placeholder' => 'Ingresa la descripcion del video'
    ])}}
    @if ($errors->has('descripcion'))
        <span class="help-block">
                        <strong>{{ $errors->first('descripcion') }}</strong>
                    </span>
    @endif
</div>


<div class="form-group {{ $errors->has('posicion') ? ' has-error' : '' }}">
    {{Form::label('posicion', 'Indica la posicion del Banner')}}
    {{Form::select('posicion', [
        'superior' => 'En la parte mas superior de la pagina',
        'inferior' => 'En la parte de abajo de la pagina',
        'costado_video_1' => 'Primer anuncio al costado del video',
        'costado_video_2' => 'Segundo anuncio al costado del video',
        'anuncio_chica' => 'Anuncio a lado de la pagina de las Scorts'
        ], null, ['class' => 'form-control'])}}
    @if ($errors->has('posicion'))
        <span class="help-block">
            <strong>{{ $errors->first('posicion') }}</strong>
        </span>
    @endif
</div>


<div class="form-group {{ $errors->has('pais') ? ' has-error' : '' }}">
    {{Form::label('pais', 'Indica el pais al que esta dirigido el anuncio')}}
    {{ Form::select('pais', config('options.paises'), null, ['class' => 'form-control']) }}
    @if ($errors->has('pais'))
        <span class="help-block">
            <strong>{{ $errors->first('pais') }}</strong>
        </span>
    @endif
</div>


<div class="form-group {{ $errors->has('idioma') ? ' has-error' : '' }}">
    {{Form::label('idioma', 'Indica el idioma del anuncio')}}
    {{Form::select('idioma', [
        'espanol' => 'Español',
        'ingles' => 'Ingles'
        ], null, ['class' => 'form-control'])}}
    @if ($errors->has('idioma'))
        <span class="help-block">
            <strong>{{ $errors->first('idioma') }}</strong>
        </span>
    @endif
</div>

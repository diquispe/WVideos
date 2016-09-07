<div class="row">
    <div class="col-xs-6">
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            {{Form::label('name', 'Nombre')}}
            {{Form::text('name', null, [
                'class' => 'form-control',
                'placeholder' => 'Agrega un titulo  a tu video'
            ])}}
            @if ($errors->has('name'))
                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('url') ? ' has-error' : '' }}">
            {{Form::label('url', 'Url')}}
            {{Form::text('url', null, [
                'class' => 'form-control',
                'placeholder' => 'Agrega una url por ejemplo:  esta-url-esta-bien'
            ])}}
            @if ($errors->has('url'))
                <span class="help-block">
                        <strong>{{ $errors->first('url') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', null, [
                'class' => 'form-control',
                'placeholder' => 'Agrega un titulo  a tu video'
            ])}}
            @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            {{Form::label('password', 'Password')}}
            {{Form::password('password', null, [
                'class' => 'form-control',
                'placeholder' => 'Agrega un titulo  a tu video'
            ])}}
            @if ($errors->has('password'))
                <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @endif
        </div>

    </div>
    <div class="col-xs-6 bg_foto_chica">
        <h4>Esta es tu foto: (puedes cambiarla subiendo otra)</h4>
        @if (isset($chica))
        <div class="imagen-chica-dash"><img src="/uploads/{{ $chica->image }}" alt=""></div>
            @else
        No existe foto todavia
            @endif
    </div>
</div>




<div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
    {{Form::label('lastname', 'Apellidos')}}
    {{Form::text('lastname', null, [
        'class' => 'form-control',
        'placeholder' => 'Agrega un titulo  a tu video'
    ])}}
    @if ($errors->has('lastname'))
        <span class="help-block">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
    @endif
</div>


<div class="form-group {{ $errors->has('nickname') ? ' has-error' : '' }}">
    {{Form::label('nickname', 'Sobrenombre')}}
    {{Form::text('nickname', null, [
        'class' => 'form-control',
        'placeholder' => 'Agrega un titulo  a tu video'
    ])}}
    @if ($errors->has('nickname'))
        <span class="help-block">
                        <strong>{{ $errors->first('nickname') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
    {{Form::label('phone', 'Telefono')}}
    {{Form::text('phone', null, [
        'class' => 'form-control',
        'placeholder' => 'Agrega un titulo  a tu video'
    ])}}
    @if ($errors->has('phone'))
        <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
<h3>Imagen Principal</h3>
    {{Form::label('image', 'image')}}
    {{Form::file('image')}}
    @if ($errors->has('image'))
        <span class="help-block">
            <strong>{{ $errors->first('image') }}</strong>
        </span>
    @endif
</div>

<h3>Imagenes galerias</h3>

<div class="form-group {{ $errors->has('photo1') ? ' has-error' : '' }}">

    {{Form::label('photo1', 'photo1')}}
    {{Form::file('photo1')}}
    @if ($errors->has('photo1'))
        <span class="help-block">
            <strong>{{ $errors->first('photo1') }}</strong>
        </span>
    @endif
</div>


<div class="form-group {{ $errors->has('photo2') ? ' has-error' : '' }}">

    {{Form::label('photo2', 'photo2')}}
    {{Form::file('photo2')}}
    @if ($errors->has('photo2'))
        <span class="help-block">
            <strong>{{ $errors->first('photo2') }}</strong>
        </span>
    @endif
</div>

<div class="form-group {{ $errors->has('photo3') ? ' has-error' : '' }}">

    {{Form::label('photo3', 'photo3')}}
    {{Form::file('photo3')}}
    @if ($errors->has('photo3'))
        <span class="help-block">
            <strong>{{ $errors->first('photo3') }}</strong>
        </span>
    @endif
</div>

<div class="form-group {{ $errors->has('photo4') ? ' has-error' : '' }}">

    {{Form::label('photo4', 'photo4')}}
    {{Form::file('photo4')}}
    @if ($errors->has('photo4'))
        <span class="help-block">
            <strong>{{ $errors->first('photo4') }}</strong>
        </span>
    @endif
</div>

<div class="form-group {{ $errors->has('photo5') ? ' has-error' : '' }}">

    {{Form::label('photo5', 'photo5')}}
    {{Form::file('photo5')}}
    @if ($errors->has('photo5'))
        <span class="help-block">
            <strong>{{ $errors->first('photo5') }}</strong>
        </span>
    @endif
</div>

<div class="form-group {{ $errors->has('photo6') ? ' has-error' : '' }}">

    {{Form::label('photo6', 'photo6')}}
    {{Form::file('photo6')}}
    @if ($errors->has('photo6'))
        <span class="help-block">
            <strong>{{ $errors->first('photo6') }}</strong>
        </span>
    @endif
</div>

<div class="form-group {{ $errors->has('photo7') ? ' has-error' : '' }}">

    {{Form::label('photo7', 'photo7')}}
    {{Form::file('photo7')}}
    @if ($errors->has('photo7'))
        <span class="help-block">
            <strong>{{ $errors->first('photo7') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('photo8') ? ' has-error' : '' }}">

    {{Form::label('photo8', 'photo8')}}
    {{Form::file('photo8')}}
    @if ($errors->has('photo8'))
        <span class="help-block">
            <strong>{{ $errors->first('photo8') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('photo9') ? ' has-error' : '' }}">

    {{Form::label('photo9', 'photo9')}}
    {{Form::file('photo9')}}
    @if ($errors->has('photo9'))
        <span class="help-block">
            <strong>{{ $errors->first('photo9') }}</strong>
        </span>
    @endif
</div>

<div class="form-group {{ $errors->has('photo10') ? ' has-error' : '' }}">

    {{Form::label('photo10', 'photo10')}}
    {{Form::file('photo10')}}
    @if ($errors->has('photo10'))
        <span class="help-block">
            <strong>{{ $errors->first('photo10') }}</strong>
        </span>
    @endif
</div>






<div class="form-group {{ $errors->has('resumen') ? ' has-error' : '' }}">
    {{Form::label('resumen', 'Resumen')}}
    {{Form::textarea('resumen', null, [
        'class' => 'form-control',
        'placeholder' => 'Escribe acerca de los detalles de tu servicio'
    ])}}
    @if ($errors->has('resumen'))
        <span class="help-block">
                        <strong>{{ $errors->first('resumen') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('medidas') ? ' has-error' : '' }}">
    {{Form::label('medidas', 'Medidas')}}
    {{Form::text('medidas', null, [
        'class' => 'form-control',
        'placeholder' => 'Agrega un titulo  a tu video'
    ])}}
    @if ($errors->has('medidas'))
        <span class="help-block">
                        <strong>{{ $errors->first('medidas') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('atencion') ? ' has-error' : '' }}">
    {{Form::label('atencion', 'Atencion')}}
    {{Form::text('atencion', null, [
        'class' => 'form-control',
        'placeholder' => 'Agrega un titulo  a tu video'
    ])}}
    @if ($errors->has('atencion'))
        <span class="help-block">
                        <strong>{{ $errors->first('atencion') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('horario') ? ' has-error' : '' }}">
    {{Form::label('horario', 'Horario')}}
    {{Form::text('horario', null, [
        'class' => 'form-control',
        'placeholder' => 'Agrega un titulo  a tu video'
    ])}}
    @if ($errors->has('horario'))
        <span class="help-block">
                        <strong>{{ $errors->first('horario') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('edad') ? ' has-error' : '' }}">
    {{Form::label('edad', 'Edad')}}
    {{Form::text('edad', null, [
        'class' => 'form-control',
        'placeholder' => 'Agrega un titulo  a tu video'
    ])}}
    @if ($errors->has('edad'))
        <span class="help-block">
                        <strong>{{ $errors->first('edad') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('pais') ? ' has-error' : '' }}">
    {{Form::label('pais', 'Pais')}}
    {{Form::text('pais', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingresa tu pais'
    ])}}
    @if ($errors->has('pais'))
        <span class="help-block">
                        <strong>{{ $errors->first('pais') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('estado') ? ' has-error' : '' }}">
    {{Form::label('estado', 'Estado')}}
    {{Form::text('estado', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingresa tu estado'
    ])}}
    @if ($errors->has('estado'))
        <span class="help-block">
                        <strong>{{ $errors->first('estado') }}</strong>
                    </span>
    @endif
</div>


<div class="form-group {{ $errors->has('ciudad') ? ' has-error' : '' }}">
    {{Form::label('ciudad', 'Ciudad')}}
    {{Form::text('ciudad', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingresa tu ciudad'
    ])}}
    @if ($errors->has('ciudad'))
        <span class="help-block">
                        <strong>{{ $errors->first('ciudad') }}</strong>
        </span>
    @endif
</div>














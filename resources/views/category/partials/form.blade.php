<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    {{Form::label('name', 'name')}}
    {{Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingresa el nombre de la categoria'
    ])}}
    @if ($errors->has('name'))
        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}">

    {{Form::label('imagen', 'imagen')}}
    {{Form::file('imagen')}}
    @if ($errors->has('imagen'))
        <span class="help-block">
                        <strong>{{ $errors->first('imagen') }}</strong>
                    </span>
    @endif
</div>
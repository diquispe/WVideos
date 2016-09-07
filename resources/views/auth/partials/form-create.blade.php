<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {{Form::label('name', 'Nombre', array('class' => 'col-md-4 control-label'))}}

    <div class="col-md-6">
        {{Form::text('name', null, [
            'class' => 'form-control',
            'placeholder' => 'Agrega un titulo  a tu videoss',
        ])}}
        @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {{Form::label('email', 'Email', array('class' => 'col-md-4 control-label'))}}

    <div class="col-md-6">
        {{Form::email('email', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingresa tu correo',
        ])}}
        @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {{Form::label('password', 'Password', array('class' => 'col-md-4 control-label'))}}

    <div class="col-md-6">
        {{Form::password('password', [
            'class' => 'form-control',
            'placeholder' => 'Ingresa tu contraseña',
        ])}}
        @if ($errors->has('password'))
            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    {{Form::label('password_confirmation', 'Confirmar Contraseña', array('class' => 'col-md-4 control-label'))}}

    <div class="col-md-6">
        {{Form::password('password_confirmation', [
            'class' => 'form-control',
            'placeholder' => 'Vuelve a ingresar tu contraseña',
        ])}}
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
        @endif
    </div>
</div>
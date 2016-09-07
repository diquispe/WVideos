
<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
    {{Form::label('title', 'Titulo')}}
    {{Form::text('title', null, [
        'class' => 'form-control',
        'placeholder' => 'Agrega un titulo  a tu videoss',
        'value' => 'Valor por defecto',
    ])}}
    @if ($errors->has('title'))
        <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('url') ? ' has-error' : '' }}">
    {{Form::label('url', 'Titulo')}}
    {{Form::text('url', null, [
        'class' => 'form-control',
        'placeholder' => 'Agrega un url al video',
        'value' => 'url-por-defecto-aqui',
    ])}}
    @if ($errors->has('url'))
        <span class="help-block">
                        <strong>{{ $errors->first('url') }}</strong>
        </span>
    @endif
</div>


<div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }}">
    <label for="category_id">Seleccione una categoria</label>
    <select class="form-control" id="category_id" name="category_id" value="@if(isset($video->category_id)){{$video->category_id}}@endif">
        @foreach($mascategorias as $categoria)
            <option value="{{ $categoria->id  }}" @if ($video->category_id && $video->category_id==$categoria->id) selected @endif>{{ $categoria->name }}</option>
        @endforeach

        @if ($errors->has('category_id'))
            <span class="help-block">
                                <strong>{{ $errors->first('category_id') }}</strong>
                            </span>
        @endif
    </select>
</div>


<div class="form-group {{ $errors->has('id_video') ? ' has-error' : '' }}">
    {{Form::label('id_video', 'ID del Video')}}
    {{Form::text('id_video', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingresa el ID del video'
    ])}}
    @if ($errors->has('id_video'))
        <span class="help-block">
                        <strong>{{ $errors->first('id_video') }}</strong>
                    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}">
    {{Form::label('descripcion', 'Descripcion del Video')}}
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
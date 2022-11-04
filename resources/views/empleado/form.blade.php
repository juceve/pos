<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cedula') }}
            {{ Form::text('cedula', $empleado->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechanacimiento') }}
            {{ Form::text('fechanacimiento', $empleado->fechanacimiento, ['class' => 'form-control' . ($errors->has('fechanacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechanacimiento']) }}
            {!! $errors->first('fechanacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('naturalpersona_id') }}
            {{ Form::text('naturalpersona_id', $empleado->naturalpersona_id, ['class' => 'form-control' . ($errors->has('naturalpersona_id') ? ' is-invalid' : ''), 'placeholder' => 'Naturalpersona Id']) }}
            {!! $errors->first('naturalpersona_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $empleado->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargoempleado_id') }}
            {{ Form::text('cargoempleado_id', $empleado->cargoempleado_id, ['class' => 'form-control' . ($errors->has('cargoempleado_id') ? ' is-invalid' : ''), 'placeholder' => 'Cargoempleado Id']) }}
            {!! $errors->first('cargoempleado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activo') }}
            {{ Form::text('activo', $empleado->activo, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
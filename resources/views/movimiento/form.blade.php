<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('fecha') }}
                    {{ Form::date('fecha', $movimiento->fecha?$movimiento->fecha:now(), ['class' => 'form-control' .
                    ($errors->has('fecha') ? '
                    is-invalid' : ''), 'placeholder' => 'Fecha']) }}
                    {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('tipomovimiento_id') }}
                    {{ Form::select('tipomovimiento_id', $tiposMov,
                    $movimiento->tipomovimiento_id?$movimiento->tipomovimiento_id:null, ['class' => 'form-control' .
                    ($errors->has('tipomovimiento_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un tipo']) }}
                    {!! $errors->first('tipomovimiento_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('concepto') }}
                    {{ Form::text('concepto', $movimiento->concepto, ['class' => 'form-control' .
                    ($errors->has('concepto') ? '
                    is-invalid' : ''), 'placeholder' => 'Concepto']) }}
                    {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('Monto Bs.') }}
                    {{ Form::number('monto', $movimiento->monto, ['class' => 'form-control' . ($errors->has('monto') ? '
                    is-invalid' : ''), 'placeholder' => '0','step' => "0.01"]) }}
                    {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

        </div>
        <div class="form-group d-none">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $movimiento->user_id?$movimiento->user_id:auth()->id(), ['class' => 'form-control'
            .
            ($errors->has('user_id') ? '
            is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <hr>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success px-5"><i class="fas fa-save"></i> GUARDAR</button>
    </div>
</div>
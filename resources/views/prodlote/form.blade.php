<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        {{ Form::label('Fecha') }}
                        {{ Form::date('fecha', $prodlote->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? '
                        is-invalid' : ''), 'placeholder' => '']) }}
                        {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('Producto') }}
                    {{-- {{ Form::text('movimiento_id', $prodlote->movimiento_id, ['class' => 'form-control' .
                    ($errors->has('movimiento_id') ? ' is-invalid' : ''), 'placeholder' => 'Movimiento Id'] }} --}}
                    {!! Form::select('producto_id', $productos, $prodlote->producto_id, ['class' => 'Select2' , 'style'
                    => 'width: 100%',
                    'placeholder' => 'Seleccione una opcion', 'id' => 'producto_id','required']) !!}

                    {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('Cantidad Prod.') }}
                    {{ Form::number('cantProducto', $prodlote->cantProducto, ['class' => 'form-control' .
                    ($errors->has('cantProducto') ? ' is-invalid' : ''), 'placeholder' => 'Cantproducto', 'required'])
                    }}
                    {!! $errors->first('cantProducto', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('vencimiento') }}
                    {{ Form::date('vencimiento', $prodlote->vencimiento, ['class' =>
                    'form-control' . ($errors->has('vencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Vencimiento',
                    'required']) }}
                    {!! $errors->first('vencimiento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('Concepto') }}
                    {{ Form::text('concepto', $prodlote->movimiento->concepto, ['class' => 'form-control' .
                    ($errors->has('cantProducto') ? ' is-invalid' : ''), 'placeholder' => 'Concepto', 'required','id' => 'concepto'])
                    }}
                    {!! $errors->first('Concepto', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('Monto Bs.') }}
                    {{ Form::number('monto', $prodlote->movimiento->monto, ['class' => 'form-control' .
                    ($errors->has('cantProducto') ? ' is-invalid' : ''), 'placeholder' => 'Monto Bs.', 'required'])
                    }}
                    {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <input type="hidden" value="{{$prodlote->movimiento->tipomovimiento_id}}" name="tipomovimiento_id">
            <input type="hidden" value="{{$prodlote->movimiento_id}}" name="movimiento_id">
        </div>




        <hr>
        <div class="form-group">
            <button type="submit" class="btn btn-info px-5"><i class="fas fa-save"></i>
                Guardar cambios</button>
        </div>
    </div>
</div>
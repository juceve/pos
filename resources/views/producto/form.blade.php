<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Cod. Barras') }}
            {{ Form::text('codigo', $producto->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => '', 'wire:model'=>'codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => '', "onkeyup"=>"javascript:this.value=this.value.toUpperCase();", "required", 'wire:model'=>'nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio venta') }}
            {{ Form::number('precioVenta', $producto->precioVenta, ['class' => 'form-control' . ($errors->has('precioVenta') ? ' is-invalid' : ''), "step"=>"0.01",'placeholder' => '', "required",'wire:model'=>'precioVenta']) }}
            {!! $errors->first('precioVenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Stock Min.') }}
            {{ Form::number('minimoStock', $producto->minimoStock, ['class' => 'form-control' . ($errors->has('minimoStock') ? ' is-invalid' : ''), 'placeholder' => '', "required",'wire:model'=>'minimoStock']) }}
            {!! $errors->first('minimoStock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group d-none">
            {{ Form::label('activo') }}
            {{ Form::text('activo', $producto->activo ? $producto->activo : true, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => '','wire:model'=>'activo']) }}
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria') }}
            {{ Form::select('categoriaProducto_id', $catProd, $producto->categoriaProducto_id ? $producto->categoriaProducto_id : null, ['class' => 'form-control' . ($errors->has('categoriaProducto_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una categoria', "required",'wire:model'=>'categoriaProducto_id']) }}
            {!! $errors->first('categoriaProducto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    
</div>
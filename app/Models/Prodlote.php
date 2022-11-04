<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodlote extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'cantProducto' => 'required',
    'producto_id' => 'required',
		'vencimiento' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['fecha','movimiento_id','cantProducto','producto_id','proveedore_id','vencimiento','estado'];


    public function movimiento()
    {
        return $this->hasOne('App\Models\Movimiento', 'id', 'movimiento_id');
    }
    
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'proveedore_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $precioVenta
 * @property $minimoStock
 * @property $activo
 * @property $categoriaProducto_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoriaproducto $categoriaproducto
 * @property Movimiento[] $movimientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    use HasFactory;
    
    static $rules = [
		'nombre' => 'required',
		'precioVenta' => 'required',
		'minimoStock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','precioVenta','minimoStock','activo','categoriaProducto_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoriaproducto()
    {
        return $this->hasOne('App\Models\Categoriaproducto', 'id', 'categoriaProducto_id');
    }
    
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'proveedore_id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento', 'producto_id', 'id');
    }
    

}

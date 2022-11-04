<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $nombre
 * @property $nit
 * @property $direccion
 * @property $telefono
 * @property $responsable
 * @property $telefonoResponsable
 * @property $activo
 * @property $provcategoria_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Movimiento[] $movimientos
 * @property Provcategoria $provcategoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'nit' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','nit','direccion','telefono','responsable','telefonoResponsable','activo','provcategoria_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento', 'proveedore_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function provcategoria()
    {
        return $this->hasOne('App\Models\Provcategoria', 'id', 'provcategoria_id');
    }

    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'proveedore_id', 'id');
    }
    

}

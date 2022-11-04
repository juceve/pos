<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipomovimiento
 *
 * @property $id
 * @property $nombre
 * @property $activo
 * @property $created_at
 * @property $updated_at
 *
 * @property Movimiento[] $movimientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipomovimiento extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento', 'tipomovimiento_id', 'id');
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Juridicopersona
 *
 * @property $id
 * @property $razonsocial
 * @property $direccion
 * @property $telefono
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Juridicopersona extends Model
{
    
    static $rules = [
		'razonsocial' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['razonsocial','direccion','telefono','email'];



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Naturalpersona
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $nombre_completo
 * @property $domicilio
 * @property $telefono
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado[] $empleados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Naturalpersona extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'nombre_completo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','nombre_completo','domicilio','telefono','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'naturalpersona_id', 'id');
    }
    

}

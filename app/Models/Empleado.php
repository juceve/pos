<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $cedula
 * @property $fechanacimiento
 * @property $naturalpersona_id
 * @property $user_id
 * @property $cargoempleado_id
 * @property $activo
 * @property $created_at
 * @property $updated_at
 *
 * @property Cargoempleado $cargoempleado
 * @property Naturalpersona $naturalpersona
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'naturalpersona_id' => 'required',
		'cargoempleado_id' => 'required',
		'activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','fechanacimiento','naturalpersona_id','user_id','cargoempleado_id','activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cargoempleado()
    {
        return $this->hasOne('App\Models\Cargoempleado', 'id', 'cargoempleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function naturalpersona()
    {
        return $this->hasOne('App\Models\Naturalpersona', 'id', 'naturalpersona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}

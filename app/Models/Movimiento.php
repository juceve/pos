<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Movimiento extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'concepto' => 'required',
		'tipomovimiento_id' => 'required',
		'monto' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['fecha','concepto','tipomovimiento_id', 'monto','user_id','estado'];

    public function prodlotes()
    {
        return $this->hasMany('App\Models\Prodlote', 'movimiento_id', 'id');
    }

    public function tipomovimiento()
    {
        return $this->hasOne('App\Models\Tipomovimiento', 'id', 'tipomovimiento_id');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}

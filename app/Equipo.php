<?php

namespace App;

use App\Traits\DateSerializable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Equipo extends Model
{

	use DateSerializable;

    protected $table = "equipo";

	protected $dates = [
    	'fecha_creacion'      ,
	    'fecha_actualizacion'
    ];

	protected $hidden = [
		'compania_id'
	];

	public function getNamespaceAttribute( ) {
		return strtolower($this->compania->acronimo.$this->nombre);
	}

	public function personas() {
		return $this->belongsToMany('App\Persona');
	}

	public function compania() {
		return $this->belongsTo('App\Compania');
	}
}

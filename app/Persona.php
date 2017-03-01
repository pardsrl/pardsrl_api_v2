<?php

namespace App;

use App\Traits\DateSerializable;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{

	use DateSerializable;

	const CREATED_AT = 'fecha_creacion';


	const UPDATED_AT = 'fecha_actualizacion';


	protected $table = "persona";

	protected $hidden = [
		'pivot','usuario_id'
	];


	public function equipos(  ) {
		return $this->belongsToMany('App\Equipo');
	}
	public function usuario( ) {
		return $this->belongsTo('App\Usuario');
	}
}

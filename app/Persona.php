<?php

namespace App;

use App\Traits\DateSerializable;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{

	use DateSerializable;

	protected $dates = [
		'fecha_creacion'      ,
		'fecha_actualizacion'
	];

	protected $table = "persona";

	protected $hidden = [
		'pivot','usuario_id'
	];

	public function usuario( ) {
		return $this->belongsTo('App\Usuario');
	}
}

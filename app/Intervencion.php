<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervencion extends Model
{
    protected $table = 'intervencion';


	const CREATED_AT = 'fecha_creacion';


	const UPDATED_AT = 'fecha_actualizacion';

	public function pozo( ) {
		return $this->belongsTo('App\Pozo');
    }

	public function equipo( ) {
		return $this->belongsTo('App\Equipo');
	}
}

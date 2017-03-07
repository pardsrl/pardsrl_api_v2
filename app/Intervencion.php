<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervencion extends Model
{
    protected $table = 'intervencion';


	const CREATED_AT = 'fecha_creacion';


	const UPDATED_AT = 'fecha_actualizacion';

//	protected $dateFormat = 'YYYY-MM-DDTHH:mmZ';
//
//	protected $dates = ['fecha'];

	public function pozo( ) {
		return $this->belongsTo('App\Pozo');
    }

	public function equipo( ) {
		return $this->belongsTo('App\Equipo');
	}

	public function creadoPor(  ) {
		return $this->belongsTo('App\Usuario');
	}

	public function actualizadoPor(  ) {
		return $this->belongsTo('App\Usuario');
	}
}

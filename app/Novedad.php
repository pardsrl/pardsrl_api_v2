<?php

namespace App;

use App\Traits\DateSerializable;
use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
	use DateSerializable;

	protected $table = 'novedad';

	protected $dates = [
		'fecha_creacion'      ,
		'fecha_actualizacion',
		'inicio',
		'fin'
	];
}

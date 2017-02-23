<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pozo extends Model
{
	protected $table = "pozo";


	public function yacimiento( ) {
		return $this->belongsTo('App\Yacimiento');
	}
}

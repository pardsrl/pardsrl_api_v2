<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervencion extends Model
{
    protected $table = 'intervencion';

	public function pozo( ) {
		return $this->belongsTo('App\Pozo');
    }
}

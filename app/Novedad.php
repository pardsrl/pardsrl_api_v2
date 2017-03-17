<?php

namespace App;

use App\Traits\DateSerializable;
use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    use DateSerializable;

    protected $table = 'novedad';

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_actualizacion';

    protected $dates = ['inicio','fin'];

    protected $appends = ['finIso8601'];

    public function getFinIso8601Attribute()
    {
        return $this->fin ? $this->fin->toAtomString() : null;
    }

    public function maniobra()
    {
        return $this->belongsTo('\App\Maniobra');
    }

    public function intervencion()
    {
        return $this->belongsTo('\App\Intervencion');
    }

    public function creadoPor()
    {
        return $this->belongsTo('App\Usuario');
    }

    public function actualizadoPor()
    {
        return $this->belongsTo('App\Usuario');
    }
}

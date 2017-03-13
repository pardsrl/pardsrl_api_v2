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

    protected $dates = [
        'inicio',
        'fin'
    ];

    public function maniobra()
    {
        return $this->belongsTo('\App\Maniobra');
    }
}

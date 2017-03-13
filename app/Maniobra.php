<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maniobra extends Model
{
    use \App\Traits\DateSerializable;

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_actualizacion';

    protected $table = "maniobra";
}

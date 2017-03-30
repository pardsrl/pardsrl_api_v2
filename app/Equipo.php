<?php

namespace App;

use App\Traits\DateSerializable;
use App\Intervencion;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use DateSerializable;

    protected $table = "equipo";

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_actualizacion';

    protected $hidden = [
        'compania_id'
    ];

    protected $appends = ['namespace','interviniendo','ultimaIntervencion'];

    public function getInterviniendoAttribute()
    {
        $intervencion = $this->intervenciones()->latest('fecha')->first();

        if ($intervencion) {
            return $intervencion->accion == 1 ? false : true;
        }

        return false;
    }

    public function getUltimaIntervencionAttribute()
    {
        $intervencion = $this->intervenciones()->with(['pozo','pozo.yacimiento'])->latest('fecha')->first();

        return $intervencion;
    }

    public function getNamespaceAttribute()
    {
        return strtolower($this->compania->acronimo.$this->nombre);
    }

    public function personas()
    {
        return $this->belongsToMany('App\Persona');
    }

    public function compania()
    {
        return $this->belongsTo('App\Compania');
    }

    public function intervenciones()
    {
        return $this->hasMany('App\Intervencion');
    }
}

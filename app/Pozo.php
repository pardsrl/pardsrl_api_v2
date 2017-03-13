<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pozo extends Model
{
    protected $table = "pozo";


    public function isAbierto()
    {
        $ultimaIntervencion = $this->intervenciones()->latest('fecha')->first();

        if ($ultimaIntervencion) {
            return $ultimaIntervencion->accion == 0 ? true : false;
        }

        //en el caso de que no tenga una intervención, se determina que el pozo está cerrado.
        return false;
    }

    public function yacimiento()
    {
        return $this->belongsTo('App\Yacimiento');
    }

    public function intervenciones()
    {
        return $this->hasMany('App\Intervencion');
    }
}

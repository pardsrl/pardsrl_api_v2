<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class IntervencionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'accion'    => 'in:0,1|required|numeric',
                'fecha'     => 'required|date|before_or_equal:today',
                'pozo'      => 'required|numeric'
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            //$pozo_id = $this->pozo;

            $equipo_id = $this->equipo;

            $fecha = new Carbon($this->fecha);

            // $intervencion = \App\Intervencion::where('pozo_id', $pozo_id)->where('equipo_id', $equipo_id)->latest('fecha')->first();
            $intervencion = \App\Intervencion::where('equipo_id', $equipo_id)->latest('fecha')->first();


            if ($intervencion && ($fecha->lte($intervencion->fecha))) {
                $fecha = (new Carbon($intervencion->fecha))->format('d/m/y H:i');

                $validator->errors()->add('fecha', "La fecha ingresada no puede ser menor o igual a la fecha de la última intervención ($fecha)");
            }
        });
    }
}

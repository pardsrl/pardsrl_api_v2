<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HistoricoRequest extends FormRequest
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
		        'tipo'       => 'in:0,1|required|numeric',
		        'condicion'  => 'in:0,1|required|numeric',
		        'resolucion' => 'required|integer|min:100',
	            'fecha_pozo' => 'required|date_format:YmdHi',
	            'desde'      => 'required|numeric',
	            'hasta'      => 'required|numeric'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NovedadRequest extends FormRequest
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
          'maniobra' => 'required|numeric',
          'intervencion' => 'required|numeric',
          'inicio' => 'required|date',
          'fin' => 'date|after:inicio',
          'parcialManiobra' => 'required|numeric',
          'promedioUH' => 'required|numeric'
      ];
    }
}

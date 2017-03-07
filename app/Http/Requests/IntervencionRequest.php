<?php

namespace App\Http\Requests;

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
                'fecha'     => 'required|date|after_or_equal:today',
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
        // $validator->after(function ($validator) {
        //     $validator->errors()->add('fecha', 'Something is wrong with this field!');
        //     // if ($this->somethingElseIsInvalid()) {
        //     //     $validator->errors()->add('field', 'Something is wrong with this field!');
        //     // }
        // });
    }

}

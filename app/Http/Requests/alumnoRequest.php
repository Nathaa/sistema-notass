<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class alumnoRequest extends FormRequest
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
            'nombre' => 'max:120|required',
            'edad' => 'numeric|min:0|max:100|required',
            'direccion' => 'max:120|required',
            'encargado' => 'max:120|required'
        ];
    }
}

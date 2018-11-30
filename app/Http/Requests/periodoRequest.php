<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class periodoRequest extends FormRequest
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
            'duracion' => 'max:120|required',
            'año' => 'numeric|digits:4|required'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class asignacionRequest extends FormRequest
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
            'curso_id' => 'numeric|min:1|max:100|required',
            'alumno_id' => 'numeric|min:1|max:100|required',
        ];
    }
}

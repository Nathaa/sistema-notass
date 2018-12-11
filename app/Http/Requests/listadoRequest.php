<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class listadoRequest extends FormRequest
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
            'clase_id' => 'numeric|min:1|max:100|required',
            'alumnoNombre' => 'max:120|required',
            'estadoAsistencia' => 'max:120|required',
        ];
    }
}

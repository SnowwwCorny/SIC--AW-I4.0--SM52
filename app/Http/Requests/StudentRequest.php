<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //agregar todas las reglas de validacion
            //los names de los campos del formulario
        
            'name_student' => 'required|string|max:255',
            'lastname_student' => 'required|string|max:255',
            'id_stident' => 'required|numeric',
            'bithday' => 'required|date',
            'comments' => 'nullable|string',

        ];
    }
}

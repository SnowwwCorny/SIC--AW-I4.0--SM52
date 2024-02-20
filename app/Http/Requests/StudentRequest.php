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
            'name_student' => 'requiere|alpha',
            'email_student' => 'requiere|email',
            'password_student' => 'requiere|between:5,10',
        ];
    }
}

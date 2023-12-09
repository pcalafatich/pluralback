<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMobileUserRequest extends FormRequest
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
            'nombre' => ['required'],
            'apellido' => ['required'],
            'dni' => ['required'],
            'email' => ['required','email'],
            'domicilio' => ['required'],
            'telefono' => ['required'],
            'localidad_id' => ['required'],
            'fecha_nacimiento' => ['required'],
            'password' => ['required'],
        ];
    }
}

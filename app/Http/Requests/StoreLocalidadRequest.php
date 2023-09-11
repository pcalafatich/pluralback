<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLocalidadRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => ['required'],
            'codigo_postal' => ['required'],
            'provincia_id' => ['required']
        ];
    }
}

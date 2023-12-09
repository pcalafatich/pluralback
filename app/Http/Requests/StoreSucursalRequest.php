<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSucursalRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required',
            'domicilio' => 'required',
            'localidad_id' => 'required',
            'estado' => 'required|boolean:0,1,true,false'
        ];
    }
}

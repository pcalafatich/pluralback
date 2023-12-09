<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDescuentoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 'comercio_id' => ['required'],
            // 'tasa' => ['required'],
            // 'producto' => ['required'],
            // 'caducidad' => 'required',
            // 'estado' => 'required'
        ];
    }
}

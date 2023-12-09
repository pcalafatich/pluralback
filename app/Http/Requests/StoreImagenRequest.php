<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreImagenRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nombre' =>  ['image', 'dimensions: min_width=200, min_height=200'],
            'comercio_id' => ['required']
        ];
    }
}

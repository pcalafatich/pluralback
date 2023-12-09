<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComercioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'denominacion' => ['required', 'max:255'],
            'razon_social' => ['required', 'max:255'],
            'responsable' => ['required', 'max:255'],
            'logo' => ['image', 'dimensions: min_width=200, min_height=200'],
            'calle' => 'required',
            'altura' => 'required',
            'telefono' => 'required',
            'localidad_id' => 'required',
            'rubro_id' => 'required',
            'fecha_alta' => 'required',
            'tasa_descuento' => 'required',
            'email' => ['required', 'email', 'max:255', 'unique:users'],
        ];
    }
}

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
            'sucursal_id' => ['required'],
            'zona' => ['required'],
            'promotor_id' => ['required'],
            'responsable' => ['required'|'max:255'],
            'logo' => ['required'],
            'calle' => ['required'],
            'altura' => ['required'],
            'piso' => ['numeric'],
            'local' => [],
            'telefono' => [],
            'localidad_id' => ['required'],
            'cuit' => ['required'],
            'fecha_alta' => ['required'],
            'ingresos_brutos' => [],
            'tasa_descuento' => ['required'],
            'email' => ['required|email'],
            'password' => ['required'],
            'web' => [],
            'facebook' => ['required'],
            'instagram' => ['required'],
            'twitter' => ['required'],
            'estado' => ['required'|'numeric']
        ];
    }
}

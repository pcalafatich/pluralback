<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ComercioResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'attributes' => [
                'denominacion' => $this->denominacion,
                'razon_social' => $this->razon_social,
                'zona' => $this->zona,
                'promotor_id' => $this->promotor_id,
                'logo' => $this->logo,
                'calle' => $this->calle,
                'altura' => $this->altura,
                'piso' => $this->piso,
                'local' => $this->local,
                'telefono' => $this->telefono,
                'localidad_id' => $this->localidad_id,
                'cuit' => $this->cuit,
                'fecha_alta' => $this->fecha_alta,
                'ingresos_brutos' => $this->ingresos_brutos,
                'tasa_descuento' => $this->tasa_descuento,
                'email' => $this->mail,
                'password' => $this->password,
                'web' => $this->web,
                'facebook' => $this->facebook,
                'instagram' => $this->instagram,
                'twitter' => $this->twitter,
                'responsable' => $this->responsable,
                'sucursal_id' => $this->sucursal_id,
                'estado' => $this->estado
            ],
            'relationships' => [
                'sucursal' => $this->sucursal->nombre,
                'localidad' => $this->localidad->nombre,
                'promotor' => $this->promotor->nombre,
//                'imagen' => $this->imagen->id
            ]

        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SucursalResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'attributes' => [
                'nombre' => $this->nombre,
                'domicilio' => $this->domicilio,
                'localidad_id' => $this->localidad_id,
                'estado' => $this->estado
            ],
            'relationships' => [
                'localidad' => $this->localidad->nombre,
                'provincia' => $this->localidad->provincia->nombre
            ],

        ];
    }
}

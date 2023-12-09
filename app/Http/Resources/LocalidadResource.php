<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LocalidadResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'attributes' => [
                'nombre' => $this->nombre,
                'codigo_postal' => $this->codigo_postal,
                'provincia_id' => $this->provincia_id
            ],
            'relationships' => [
                'ID Provincia' => (string) $this->provincia->id,
                'Nombre Provincia' => $this->provincia->nombre,
                'LocalidadProvincia' => $this->nombre .', '. $this->provincia->nombre
            ],

        ];
    }
}

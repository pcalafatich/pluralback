<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProvinciaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'attributes' => [
                'nombre' => $this->nombre
            ],
            'relationships' => [
                'localidad' => $this->localidad->all()
            ]
        ];
    }
}

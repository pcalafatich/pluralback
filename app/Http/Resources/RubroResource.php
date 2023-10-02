<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RubroResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'attributes' => [
                'nombre' => $this->nombre,
                'notas' => $this->notas
            ],
            'relationships' => [
            //     'localidad' => $this->localidad->all()
            ]
        ];
    }
}

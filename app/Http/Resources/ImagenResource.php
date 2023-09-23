<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImagenResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'attributes' => [
            ],
            'relationships' => [
                'comercio' => $this->comercio->nombre,
            ]
        ];
    }
}

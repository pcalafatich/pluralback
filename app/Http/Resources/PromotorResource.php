<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PromotorResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'attributes' => [
                'nombre' => $this->nombre,
                'sucursal_id' => $this->sucursal_id

            ],
            'relationships' => [
                'ID Sucursal' => (string) $this->sucursal->id,
                'sucursal' => $this->sucursal->nombre,
                'ID Comercio' => (string) $this->id,
                'Comercios' => $this->comercio->all()
            ]
        ];
    }
}

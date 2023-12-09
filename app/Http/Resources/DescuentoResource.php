<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DescuentoResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'attributes' => [
                'comercio_id' => $this->comercio_id,
                'tasa' => $this->tasa,
                'producto' => $this->producto,
                'caducidad' => $this->caducidad,
                'estado' => $this->estado
            ],
            'relationships' => [
                'comercio' => $this->comercio->denominacion,
                'denominacion' => $this->comercio->denominacion,
                'domicilio' => $this->comercio->calle ." ". $this->comercio->altura ." ". $this->comercio->piso ." ". $this->comercio->local,
                'logo' => $this->comercio->logo,
                'localidad' => $this->comercio->localidad->nombre
            ]

        ];
    }
}

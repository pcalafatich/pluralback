<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LocalidadAppResource extends JsonResource
{

    public function toArray($request)
    {
        {
            return [
                'id' => (string) $this->id,
                'attributes' => [
                    'nombre' => $this->nombre,
                    'codigopostal' => $this->codigo_postal
                ],
                'relationships' => [
                    'provincia' =>  $this->provincia->nombre
                ],

            ];
        }
    }
}

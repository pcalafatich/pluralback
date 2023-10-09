<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SucursalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'attributes' => [
                'nombre' => $this->nombre,
                'domicilio' => $this->domicilio,
                'estado' => $this->estado
            ],
            'relationships' => [
                'ID Provincia' => (string) $this->provincia->id,
                'Nombre Provincia' => $this->provincia->nombre
            ],

        ];
    }
}

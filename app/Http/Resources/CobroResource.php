<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CobroResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'attributes' => [
                'comercio_id' => $this->comercio_id,
                'fecha_cobro' => $this->fecha_cobro,
                'importe' => $this->importe,
                'mes_abono' => $this->mes_abono,
                'anio_abono' => $this->anio_abono,
                'ingresado_por' => $this->ingresado_por

            ],
            'relationships' => [
                'ID Comercio' => (string) $this->comercio->id,
                'Nombre Comercio' => $this->comercio->nombre,
                'ID'=> (string)$this->user->id,
                'Ingresado Por' => $this->user->name,
            ],

        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MobileUserResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'dni' => $this->dni,
            'password' => $this->password,
            'email' => $this->email,
            'domicilio' => $this->domicilio,
            'telefono' => $this->telefono,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'localidad_id' => $this->localidad_id,
            'localidad' => $this->localidad->nombre,
            'provincia' => $this->localidad->provincia->nombre,
            'localidadProvincia' => $this->localidad->nombre .', '.$this->localidad->provincia->nombre,
            'tarjeta' => $this->tarjeta,
            'estado' => $this->estado
        ];
    }
}

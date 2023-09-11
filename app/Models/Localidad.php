<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    use HasFactory;

    protected $table = 'localidades';

    protected $guarded = [];

    //RELACIONES

    public function sucursales()
    {
        return $this->belongsTo(Sucursal::class);
    }

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }
}

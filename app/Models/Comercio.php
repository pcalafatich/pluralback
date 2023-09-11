<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    use HasFactory;

    protected $guarded = [];

    //RELACIONES

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class);
    }

    public function localidad()
    {
        return $this->belongsTo(Localidad::class);
    }

    public function promotor()
    {
        return $this->belongsTo(Promotor::class);
    }

    public function imagen()
    {
        return $this->hasMany(Imagen::class);
    }

    public function descuento()
    {
        return this->hasMany(Descuento::classs);
    }

}

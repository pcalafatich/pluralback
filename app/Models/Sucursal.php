<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = 'sucursales';

    protected $guarded = [];

    //RELACIONES

    public function localidad()
    {
        return $this->hasMany(Localidad::class);
    }

    public function comercios()
    {
        return $this->hasMany(Comercio::class);
    }

    public function promotor()
    {
        return $this->hasMany(Promotor::class);
    }
}

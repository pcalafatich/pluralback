<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotor extends Model
{
    use HasFactory;

    protected $table = 'promotores';

    protected $guarded = [];

    //RELACIONES
    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class);
    }

    public function comercio()
    {
        return $this->hasMany(Comercio::class);
    }


}

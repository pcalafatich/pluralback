<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    use HasFactory;

    protected $guarded = [];

    //RELACIONES

    Public function rubro()
    {
        return this->belongsTo(Rubro::class);
    }

}

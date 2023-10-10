<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobro extends Model
{
    use HasFactory;

    protected $guarded = [];

    //RELACIONES
    public function comercio()
    {
        return $this->belongsTo(Comercio::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

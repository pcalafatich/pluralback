<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobileuser extends Model
{
    use HasFactory;

    protected $guarded = [];

    //RELACIONES

    public function localidad()
    {
        return $this->belongsTo(Localidad::class);
    }

}

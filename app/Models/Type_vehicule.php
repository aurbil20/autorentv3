<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_vehicule extends Model
{
    use HasFactory;

    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }
}

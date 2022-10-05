<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque_vehicule extends Model
{
    use HasFactory;

    public function modele_vehicules()
    {
        return $this->hasMany(Modele_vehicule::class);
    }
}

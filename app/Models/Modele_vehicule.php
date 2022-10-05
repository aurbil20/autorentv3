<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele_vehicule extends Model
{
    use HasFactory;

    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }

    public function marque_vehicule()
    {
        return $this->belongsTo(Marque_vehicule::class);
    }
}

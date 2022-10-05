<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodicite extends Model
{
    use HasFactory;

    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

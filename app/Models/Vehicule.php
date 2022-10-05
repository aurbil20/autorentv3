<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    
    use HasFactory;

    protected $fillable = ['immatriculation', 'image', 'numberplace', 'numberdoor','conso','gearbox','climatisation','etat','agence_id','modele_vehicule_id','type_vehicule_id'];

    public function agences()
    {
        return $this->belongsTo(Agence::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function periodicites()
    {
        return $this->hasMany(Periodicite::class);
    }

    public function type_vehicule()
    {
        return $this->belongsTo(Type_vehicule::class);
    }

    public function modele_vehicule()
    {
        return $this->belongsTo(Modele_vehicule::class);
    }

}

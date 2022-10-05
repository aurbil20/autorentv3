<?php

namespace App\Models;

use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agence extends Model
{
    use HasFactory;

    protected $fillable = ['name','solde','user_id','commune_id'];

    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}

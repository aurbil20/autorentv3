<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $fillable = ['designation'];

    public function agences()
    {
        return $this->hasMany(Agence::class);
    }

    public function departements()
    {
        return $this->belongsTo(Departement::class);
    }
}

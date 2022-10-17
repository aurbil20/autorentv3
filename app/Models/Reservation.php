<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['code','amount','datesave','dateedit','period','transaction_id',];

    public function periodicites()
    {
        return $this->hasMany(Periodicite::class);
    }
}

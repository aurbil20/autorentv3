<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Marque_vehicule;
use App\Models\Modele_vehicule;
use App\Models\Periodicite;
use App\Models\Tarif;
use App\Models\User;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Do reservation 
    public function reservation($id)
    {


        return view('publicpages.doreservation', [
            'id' => $id
        ]);
    }
}

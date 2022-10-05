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
        $vehicule = Vehicule::find($id);
        $marques = Marque_vehicule::all();
        $modeles = Modele_vehicule::all();
        $periodicites = Periodicite::all();
        $tarifs = Tarif::where('vehicule_id', $vehicule->id);
        $agences = Agence::all();
        $enterprises = User::where('role_id', 2)->get();
        foreach ($agences as $item) {
            if ($item->id == $vehicule->agence_id) {
                $agence = $item;
            }
        }
        foreach ($enterprises as $item) {
            if ($item->id == $agence->user_id) {
                $enterprise = $item;
            }
        }
        foreach ($modeles as $item) {
            if ($item->id == $vehicule->modele_vehicule_id) {
                $modele = $item;
            }
        }
        foreach ($marques as $item) {
            if ($item->id == $modele->marque_vehicule_id) {
                $marque = $item;
            }
        }



        return view('publicpages.doreservation', [
            'vehicule' => $vehicule,
            'marque' => $marque,
            'modele' => $modele,
            'periodicites' => $periodicites,
            'tarifs' => $tarifs,
            'agence' => $agence,
            'enterprise' => $enterprise,
        ]);
    }
}

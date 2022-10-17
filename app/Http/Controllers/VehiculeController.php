<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Commune;
use App\Models\Vehicule;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Models\Marque_vehicule;
use App\Models\Modele_vehicule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VehiculeController extends Controller
{
    // Display all vehicles 
    public function index()
    {
        $user_id = Auth::user()->id;
        $agences = Agence::where('user_id', $user_id)->get();
        $tabvehicules = Vehicule::all();
        $vehicules = $tabvehicules->reverse();
        $communes = Commune::all();
        $departements = Departement::all();
        $marques = Marque_vehicule::all();
        $modeles = Modele_vehicule::all();


        return view('dashboard.allvehicle', [
            'agences' => $agences,
            'vehicules' => $vehicules,
            'departements' => $departements,
            'communes' => $communes,
            'agences' => $agences,
            'marques' => $marques,
            'modeles' => $modeles
        ]);
    }


    // Display index 
    public function seemore()
    {
        $agences = Agence::all();
        $tabvehicules = Vehicule::where('etat', 'Disponible')->get();
        $vehicules = $tabvehicules->reverse()->take(12);
        $communes = Commune::all();
        $departements = Departement::all();
        $marques = Marque_vehicule::all();
        $modeles = Modele_vehicule::all();


        return view('publicpages.index', [
            'agences' => $agences,
            'vehicules' => $vehicules,
            'departements' => $departements,
            'communes' => $communes,
            'agences' => $agences,
            'marques' => $marques,
            'modeles' => $modeles
        ]);
    }

    //Display availaible vehicles 
    public function avalaiblevehicle()
    {
        $user_id = Auth::user()->id;
        $agences = Agence::where('id', $user_id)->get();
        $vehicules = Vehicule::where('etat', 'Disponible');
        $communes = Commune::all();
        $departements = Departement::all();
        $marques = Marque_vehicule::all();
        $modeles = Modele_vehicule::all();

        return view('dashboard.allvehicle', [
            'agences' => $agences,
            'vehicules' => $vehicules,
            'departements' => $departements,
            'communes' => $communes,
            'agences' => $agences,
            'marques' => $marques,
            'modeles' => $modeles
        ]);
    }

    //Display broken vehicles 
    public function brokenvehicule()
    {
        $user_id = Auth::user()->id;
        $agences = Agence::where('id', $user_id)->get();
        $vehicules = Vehicule::where('etat', 'En panne');
        $communes = Commune::all();
        $departements = Departement::all();
        $marques = Marque_vehicule::all();
        $modeles = Modele_vehicule::all();

        return view('dashboard.breakvehicule', [
            'agences' => $agences,
            'vehicules' => $vehicules,
            'departements' => $departements,
            'communes' => $communes,
            'agences' => $agences,
            'marques' => $marques,
            'modeles' => $modeles
        ]);
    }

    //Display list  vehicles to remove
    public function listvehiculeremove()
    {
        $user_id = Auth::user()->id;
        $agences = Agence::where('user_id', $user_id)->get();
        $vehicules = Vehicule::all();
        $communes = Commune::all();
        $departements = Departement::all();
        $marques = Marque_vehicule::all();
        $modeles = Modele_vehicule::all();

        return view('dashboard.delvehicle', [
            'agences' => $agences,
            'vehicules' => $vehicules,
            'departements' => $departements,
            'communes' => $communes,
            'agences' => $agences,
            'marques' => $marques,
            'modeles' => $modeles
        ]);
    }

    // Show vehicle 
    public function show($id){
        $agences = Agence::all();
        $vehicule = Vehicule::find($id);
        $communes = Commune::all();
        $departements = Departement::all();
        $marques = Marque_vehicule::all();
        $modeles = Modele_vehicule::all();

        return view('dashboard.allvehicle', [
            'agences' => $agences,
            'vehicule' => $vehicule,
            'departements' => $departements,
            'communes' => $communes,
            'agences' => $agences,
            'marques' => $marques,
            'modeles' => $modeles
        ]);
    }

    
    // /user/{id}
    public function removevehicule($id){
        $vehicule = Vehicule::find($id);
        $vehicule -> delete();

        return redirect()->Route('dashboard-delvehicle');
    }
}

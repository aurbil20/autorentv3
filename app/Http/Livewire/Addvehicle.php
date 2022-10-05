<?php

namespace App\Http\Livewire;

use App\Models\Tarif;
use App\Models\Agence;
use Livewire\Component;
use App\Models\Vehicule;
use App\Models\Periodicite;
use App\Models\Type_vehicule;
use Livewire\WithFileUploads;
use App\Models\Marque_vehicule;
use App\Models\Modele_vehicule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Addvehicle extends Component
{
    use WithFileUploads;

    // FormStep Page 
    public $user_id;
    public $agences;
    public $agence_id;
    public $marques;
    public $marque_id;
    public $modeles;
    public $modele_id;
    public $typedevehicules;
    public $typedevehicule_id;
    public $immatriculation;
    public $year;
    public $gearbox;
    public $placenumber;
    public $doornumber;
    public $conso;
    public $capacity;
    public $etat;
    public bool $checkclimatisation;
    public $images = [];


    public $vehicleregistered;
    public $vehicule_id;

    public $periodicites;

    public $amount = [];

    public function mount()
    {
        $this->formStep = 1;
        $this->user_id = Auth::user()->id;
        $this->agences = Agence::where('user_id', $this->user_id)->get();
        $this->marques = Marque_vehicule::all();
        $this->typedevehicules = Type_vehicule::all();
        $this->periodicites = Periodicite::all();
        $this->modeles = array();
        $this->checkclimatisation = false;
        $this->etat = 'Disponible';
    }

    public function updatedMarqueId($value)
    {
        $this->modeles = Modele_vehicule::where("marque_vehicule_id", $value)->get();
    }

    public function nextStep()
    {

        //Validation 

        $this->validate([
            'immatriculation' => 'required|string',
            'gearbox' => 'required|string',
            'placenumber' => 'required|integer',
            'doornumber' => 'required|integer',
            'conso' => 'required',
            'capacity' => 'required',
            'etat' => 'required|string',
            'images.*' => 'file|mimes:png,jpg,pdf|max:1024',
            'agence_id' => 'required|exists:agences,id',
            'modele_id' => 'required|exists:modele_vehicules,id',
            'typedevehicule_id' => 'required|exists:type_vehicules,id',


        ]);

        // Store link of uploaded images 
        $links = "";
        $i = 0;
        foreach ($this->images as $photo) {
            $name_img = time() . '-' . $i . '.png';
            if ($links == "") {
                $links  = $photo->storeAs('images', $name_img);
            } else {
                $link = "+" . $photo->storeAs('images', $name_img);
                $links .= $link;
            }
            $i++;
        }

        // New vehicule 
        $vehicule = Vehicule::create([
            'immatriculation' => $this->immatriculation,
            'image' => $links,
            'numberplace' => $this->placenumber,
            'numberdoor' => $this->doornumber,
            'conso' => $this->conso,
            'gearbox' => $this->gearbox,
            'climatisation' => $this->checkclimatisation,
            'etat' => $this->etat,
            'agence_id' => $this->agence_id,
            'modele_vehicule_id' => $this->modele_id,
            'type_vehicule_id' => $this->typedevehicule_id,
        ]);
        
        return redirect()->Route('dashboard-allvehicle');

        
    }



    public function render()
    {
        return view('livewire.addvehicle', [
            'marques' => $this->marques,
            'modeles' => $this->modeles,
            'agences' => $this->agences,
            'typedevehicules' => $this->typedevehicules,
            'periodicites' => $this->periodicites,
        ]);
    }
}

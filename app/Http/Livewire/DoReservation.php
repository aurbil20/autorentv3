<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vehicule;
use App\Models\Marque_vehicule;
use App\Models\Modele_vehicule;


class DoReservation extends Component
{
    // Parameters 
    public $formStep = 1;
    public $vehicule;
    public $marques ;
    public $modeles;

    // Function

    public function mount(){
        $this->vehicule = Vehicule::find($id);
        $this->marques = Marque_vehicule::all();
        $this->modeles = Modele_vehicule::all();
        $this->modele = array();
        foreach ($this->modeles as $item) {
            if ($item->id == $this->vehicule->modele_vehicule_id) {
                $this->modele = $item;
            }
        }
        foreach ($this->marques as $item) {
            if ($item->id == $this->modele->marque_vehicule_id) {
                $this->marque = $item;
            }
        }
    }


    //
    public function render()
    {
        return view('livewire.do-reservation');
        
    }
}

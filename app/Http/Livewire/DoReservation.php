<?php

namespace App\Http\Livewire;

use App\Models\Tarif;
use Livewire\Component;
use App\Models\Vehicule;
use App\Models\Periodicite;
use Illuminate\Support\Str;
use App\Models\Marque_vehicule;
use App\Models\Modele_vehicule;
use App\Models\Reservation;

class DoReservation extends Component
{
    // * Parameters 
    public $code;
    public $vehicule;
    public $marques;
    public $modeles;
    public bool $okdriver;
    public $periodicites;
    public $periodicite_id;
    public $period;
    public $amount;
    public $amountdriver;
    public $transaction_id;


    // * Function

    public function mount($id)
    {
        $this->vehicule = Vehicule::find($id);
        $this->marques = Marque_vehicule::all();
        $this->modeles = Modele_vehicule::all();
        $this->periodicites = Periodicite::all();
        $this->tarifs = Tarif::where('vehicule_id', $id)->get();
        $this->okdriver = false;
        // ! pour la phase de test, considérons que le prix est de 1000 frs 
        $this->period = 10;
        $this->amount = 1000;
        $this->amountdriver = 0;
        $this->transaction_id = null;

        $this->periodicite_id = 1;
        

        // * Generate random reservation code 
        $random = Str::random(8);
        while (Reservation::where('code', $random)->exists()) {
            $random = Str::random(8);
        }
        $this->code = Str::upper($random);


        // * Found modele
        $this->modele = array();
        foreach ($this->modeles as $item) {
            if ($item->id == $this->vehicule->modele_vehicule_id) {
                $this->modele = $item;
            }
        }

        // * Found mark
        foreach ($this->marques as $item) {
            if ($item->id == $this->modele->marque_vehicule_id) {
                $this->marque = $item;
            }
        }
    }

    // * Function to calculate reservation cost

    public function reservationcost()
    {   
        /*

        ! Pour le cout de la reservation 
        !pour la phase de test, considérons que le cout est égale à 1000frs par defaut 
        
        */

        // ! Check if client want a driver 
        if ($this->okdriver) {
            $this->amountdriver = 100;
        } else {
            $this->amountdriver = 0;
        }
        // ! Find price 
        foreach ($this->tarifs as $tarif) {
            if ($this->periodicite_id == $tarif->periodicite_id) {
                if ($this->periodicite_id) {
                    $this->amount = ($tarif->price * $this->period) + $this->amountdriver;
                } else {
                    $this->amount = 0;
                }
            }
        }

    }

    // * if update period
    public function updatedPeriod($value)
    {
        $this->period = $value;
        $this->reservationcost();
    }

    // * if update okdriver 
    public function updatedOkdriver($value)
    {
        $this->okdriver = $value;
        $this->reservationcost();
    }

    // * if update periodicites
    public function updatedPeriodiciteId($value)
    {
        $this->periodicite_id = $value;
        $this->reservationcost();
    }

    // * if transaction Id found 
    public function updatedTransactionId($value){
        

        // ! Portion de code ne marchant pas pour le moment 

        $newreservation = new Reservation();
        $newreservation->code = $this->code;
        $newreservation->amount = $this->amount;
        $newreservation->datesave = date('Y-m-d H:i:s');
        $newreservation->datedit = date('Y-m-d H:i:s');
        $newreservation->period = $this->period;
        $newreservation->transaction_id = $value;
        $newreservation->driver = $this->okdriver;
        $newreservation->periodicite_id = $this->periodicite_id;
        $newreservation->user_id = auth()->user()->id;
        $newreservation->vehicule_id = $this->vehicule->id;
        dd($newreservation);
        $newreservation->save();

    }
        
    


    // ! Render 
    public function render()
    {
        return view('livewire.do-reservation');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DoReservation extends Component
{
    // Parameters 
    public $formStep = 1;


    // Function

    // Next Step
    public function nextStep()
    {
        $this->formStep++;
    }

    // PrevStep
    public function prevStep()
    {
        $this->formStep--;
    }


    //
    public function render()
    {
        return view('livewire.do-reservation');
        
    }
}

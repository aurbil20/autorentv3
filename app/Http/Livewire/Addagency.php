<?php

namespace App\Http\Livewire;

use App\Models\Agence;
use App\Models\Commune;
use Livewire\Component;
use App\Models\Departement;
use Illuminate\Support\Facades\Auth;

class Addagency extends Component
{

    public $departements;
    public $departement_id;
    public $communes;
    public $commune_id;
    public $name_agency;
    public $user_id;


    public function mount(){
        $this->user_id = Auth::user()->id ;
        $this->departements = Departement::all();
        $this->communes = array();
    }

    public function updatedDepartementId($value){
        
        $this->communes = Commune::where('departement_id', $value)->get();
    }

    public function submit(){
        $this->validate([
            'name_agency' => 'required|string',
            'user_id' => 'required|integer'
        ]);

        // dd($this->name_agency, $this->user_id, $this->commune_id);

        Agence::create([
            'name' => $this->name_agency,
            'user_id' => auth()->user()->id,
            'solde' => 0,
            'commune_id' => $this->commune_id
        ]);

        return redirect()->route('dashboard-allagencies');
    }

    public function render()
    {
        return view('livewire.addagency',[
            'departements' => $this->departements,
            'communes' => $this->communes
        ]);
    }
}

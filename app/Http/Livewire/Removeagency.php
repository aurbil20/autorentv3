<?php

namespace App\Http\Livewire;

use App\Models\Agence;
use App\Models\Commune;
use Livewire\Component;
use App\Models\Departement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Removeagency extends Component
{
    // 
    public $user_id;
    public $departements;
    public $departement_id;
    protected $communes;
    public $commune_id;
    public $agences;
    public $agence_id;

    public function mount()
    {
        $this->user_id = Auth::user()->id;
        $this->agences = Agence::where('user_id', $this->user_id)->get();
        $this->departements = Departement::all();
        $this->communes = array();

    }

    public function updatedDepartementId($value)
    {
        $this->communes = Commune::where('departement_id', $value);
        foreach ($this->communes as $commune) {
            $agence = DB::table('agences')
                ->where('user_id', '=', $this->user_id)
                ->where('commune_id', '=', $commune->id)
                ->get();
            $this->agences = $this->agences->concat($agence);
        }
    }

    public function updatedCommuneId($value)
    {
        if ($value != null) {
            $this->agences = DB::table('agences')
                ->where('user_id', '=', $this->user_id)
                ->where('commune_id', '=', $value)
                ->get();
        } else {
            $this->communes = Commune::where('departement_id', $value);
            foreach ($this->communes as $commune) {
                $agence = DB::table('agences')
                    ->where('user_id', '=', $this->user_id)
                    ->where('commune_id', '=', $commune->id)
                    ->get();
                $this->agences = $this->agences->concat($agence);
            }
        }
    }

    public function submit(){
        $removed = Agence::find($this->agence_id);
        $removed->delete();

        return redirect()->Route('dashboard-allagencies');
    }

    public function render()
    {
        return view('livewire.removeagency',[
            'agences' => $this->agences,
            'departements' => $this->departements,
            'communes' => $this->communes,
        ]);
    }
}

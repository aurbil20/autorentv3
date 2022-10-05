<?php

namespace App\Http\Controllers;

use App\Models\Modele_vehicule;
use Illuminate\Http\Request;

class ModeleVehiculeController extends Controller
{
    // add new mark
    public function add(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|unique:modele_vehicules|max:255',
            'year' => 'required|integer|min:4',
            'marquevehicule_id' => 'required|integer|exists:marque_vehicules,id'
        ]);

        Modele_vehicule::create([
            'name' => $request->name,
            'year' => $request->year,
            'marque_vehicule_id' => $request->marque_vehicule_id
        ]);

        return view();
    }

    // remove  mark 
    public function del($id)
    {
        $modele = Modele_vehicule::where('id', $id)->first();
        $modele->delete();

        return view();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Marque_vehicule;
use Illuminate\Http\Request;

class MarqueVehiculeController extends Controller
{
    // add new mark
    public function add(Request $request){
        $validation = $request->validate([
            'name' => 'required|unique:marque_vehicules|max:255',
        ]);

        Marque_vehicule::create([
            'name' => $request->name
        ]);

        return view();
    }

    // remove  mark 
    public function del($id){
        $marque = Marque_vehicule::where('id',$id)->first();
        $marque->delete();

        return view(); 
    }
}

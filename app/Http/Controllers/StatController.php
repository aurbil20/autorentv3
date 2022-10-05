<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class StatController extends Controller
{
    //
    public function index(){
        // 
        $agences = Agence::where('user_id',2);
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Agence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    // My functions 

    // See all admin users

    public function user_admin()
    {
        $users = User::where('role_id', 1)->get();
        $roles = Role::all();
        if ($users->count() == 1) {
            $users = array();
        }
        return view('dashboard.alladmin', [
            'users' => $users,
            'roles' => $roles
        ]);
    }

    // See all enterprise users

    public function user_enterprise()
    {
        $users = User::where('role_id', 2)->get();
        $roles = Role::all();

        return view('dashboard.allenterprise', [
            'users' => $users,
            'roles' => $roles
        ]);
    }

    // See all enterprise users

    public function user_client()
    {
        $users = User::where('role_id', 3)->get();
        $roles = Role::all();

        return view('dashboard.allclient', [
            'users' => $users,
            'roles' => $roles
        ]);
    }

    // Remove a user

    public function del_user($id)
    {
        $user = User::find($id);

        if ($user->role_id == 2) {

            $user->delete();

            $users = User::where('role_id', 3)->get();
            $roles = Role::all();

            return view('dashboard.allclient', [
                'users' => $users,
                'roles' => $roles
            ]);
        } elseif ($user->role_id == 3) {

            $user->delete();

            $users = User::where('role_id', 3)->get();
            $roles = Role::all();

            return view('dashboard.allclient', [
                'users' => $users,
                'roles' => $roles
            ]);
        }
    }

    public function statEnterprise()
    {
        // Id of enterprise 
        $id = auth()->user()->id;
        
        // Number of agence
        $agences = Agence::where('user_id', $id)->get();
        $numberagences = $agences->count();

        // Number of vehicle
        $vehicles = DB::table('vehicules')
            ->join('agences', 'agences.id', '=', 'vehicules.agence_id')
            ->join('users', 'users.id', '=', 'agences.user_id')
            ->where('user_id', '=',$id)
            ->get();

        $numbervehicles = $vehicles->count();

        // available vehicle
        $vehiclesavalaible = DB::table('vehicules')
        ->where('etat', '=', ' Disponible')
        ->join('agences', 'agences.id', '=', 'vehicules.agence_id')
        ->join('users', 'users.id', '=', 'agences.user_id')
        ->where('user_id', '=', $id)
        ->get();

        $numbervehiclesavalaible = $vehiclesavalaible->count();

        // Broken vehicle
        $vehiclesbroken = DB::table('vehicules')
        ->where('etat', '=', 'En panne')
        ->join('agences', 'agences.id', '=', 'vehicules.agence_id')
        ->join('users', 'users.id', '=', 'agences.user_id')
        ->where('user_id', '=', $id)
        ->get();

        $numbervehiclesbroken = $vehiclesbroken->count();

        // dd($numberagences, $numbervehicles, $numbervehiclesavalaible,);

        // Used Vehicle
        $numbervehiclesused = $numbervehicles - $numbervehiclesavalaible - $numbervehiclesbroken;

        return view('dashboard.indexEnterprise',[
            'numberagences' => $numberagences,
            'numbervehicles' => $numbervehicles,
            'numbervehiclesavalaible' => $numbervehiclesavalaible,
            'numbervehiclesused' => $numbervehiclesused,
            'numbervehiclesavailaible' =>$numbervehiclesavalaible,

        ] );
    }

    public function statAdmin(){
        $users = User::all();
        $roles = Role::all();
        $reverseusers = $users->reverse();
        $agences = Agence::all();
        $numberagences = $agences->count();
        $numberuser = $users->count();
        $enterprises = User::where('role_id',2);
        $numberenterprises =  $enterprises->count();
        $clients = User::where('role_id', 3);
        $numberclients =  $clients->count();
        
        return view('dashboard.indexAdmin',[
            'roles' => $roles,
            'numberuser' => $numberuser,
            'numberagences' => $numberagences,
            'numberenterprises' => $numberenterprises ,
            'numberclients' => $numberclients ,
            'reverseusers' => $reverseusers
        ]);
    }
}

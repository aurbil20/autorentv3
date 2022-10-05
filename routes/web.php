<?php

use App\Http\Livewire\DoReservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Public pages interfaces

Route::middleware('auth','isClient')->group(function () {

    Route::get('/doreservation/{id}', [ReservationController::class,'reservation'])->name('doreservation');
});


Route::get('/home', [VehiculeController::class, 'seemore'])->name('home');

Route::get('/catalogue', function () {
    return view('publicpages.catalogue');
})->name('catalogue');

Route::get('/detail/{id}', function () {
    return view('publicpages.detail');
})->name('detail');

Route::get('/aboutus', function () {
    return view('publicpages.aboutus');
})->name('aboutus');

// To do comment
Route::post('/post', [CommentaireController::class, 'store'])->name('comment');


// Dashboard Interfaces 


//Dashboard 
Route::get('/dash/admin', [UserController::class, 'statAdmin'])->name('dashboard-admin')->middleware('auth','isAdmin');

Route::get('/dash/enterprise', [UserController::class, 'statEnterprise'])->name('dashboard-enterprise')->middleware('auth','isEnterprise');






Route::middleware('auth','isEnterprise')->group(function () {

    // See all vehicles
    Route::get('/dash/enterprise/allvehicule', [VehiculeController::class, 'index'])->name('dashboard-allvehicle');

    // Add a vehicle
    Route::get('/dash/enterprise/addvehicule', function () {
        return view('dashboard.addvehicle');
    })->name('dashboard-addvehicle');

    // See all available vehicle
    Route::get('/dash/enterprise/availablevehicule', [VehiculeController::class, 'index'])->name('dashboard-availablevehicle');

    // See all broken down vehicle
    Route::get('/dash/enterprise/breakvehicule', [VehiculeController::class, 'brokenvehicule'])->name('dashboard-breakvehicle');

    // Change véhicule State
    Route::get('/dash/enterprise/changestatevehicule', function () {
        return view('dashboard.changestatevehicle');
    })->name('dashboard-changestatevehicule');

    // Display list vehicule for removing
    Route::get('/dash/enterprise/delvehicle', [VehiculeController::class, '<listvehicu></listvehicu>leremove'])->name('dashboard-delvehicle');

    // Remove vehicle 
    Route::get('/dash/enterprise/delvehicle/{id}', [VehiculeController::class, 'removevehicule'])->name('dashboard-delvehicleid');


    // See all agencies
    Route::get('/dash/enterprise/allagencies', function () {
        return view('dashboard.allagencies');
    })->name('dashboard-allagencies');

    // Add agency
    Route::get('/dash/enterprise/addagencies', function () {
        return view('dashboard.addagency');
    })->name('dashboard-addagency');

    // Remove agency
    Route::get('/dash/enterprise/delagency', function () {
        return view('dashboard.delagency');
    })->name('dashboard-delagency');
});

Route::middleware('auth','isAdmin')->group(function () {

    // See asked Payments
    Route::get('/dash/askpaymentadmin', function () {
        return view('dashboard.askpaymentadmin');
    })->name('dashboard-askpaymentadmin');

    // See done payments
    Route::get('/dash/donepaymentadmin', function () {
        return view('dashboard.donepaymentadmin');
    })->name('dashboard-donepaymentadmin');

    // See all admin
    Route::get('/dash/admin/alladmin', [UserController::class, 'user_admin'])->name('dashboard-alladmin');

    // See all enterprises
    Route::get('/dash/admin/allenterprise', [UserController::class, 'user_enterprise'])->name('dashboard-allenterprise');

    // See all vehicles
    Route::get('/dash/admin/allclient', [UserController::class, 'user_client'])->name('dashboard-allclient');

    // Remove one user 
    Route::get('/dash/admin/deluser/{id}', [UserController::class, 'del_user'])->name('dashboard-del_user');
});



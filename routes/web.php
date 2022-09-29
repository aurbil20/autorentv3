<?php

use App\Http\Livewire\DoReservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentaireController;

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

Route::get('/', function () {
    return view('publicpages.index');
})->name('home');

Route::get('/catalogue', function () {
    return view('publicpages.catalogue');
})->name('catalogue');

Route::get('/detail', function () {
    return view('publicpages.detail');
})->name('detail');

// Route::get('/register', function () {
//     return view('publicpages.register');
// })->name('register');

// Route::get('/login', function () {
//     return view('publicpages.login');
// })->name('login');

Route::get('/doreservation', function () {
    return view('publicpages.doreservation');
})->name('doreservation');

Route::get('/aboutus', function () {
    return view('publicpages.aboutus');
})->name('aboutus');


    // To do comment
Route::post('/post', [CommentaireController::class, 'store'])->name('comment');


// Dashboard Interfaces 
    //Dashboard 
Route::get('/dash', function () {
    return view('dashboard.index');
})->name('dashboard');

    // See all vehicles
Route::get('/dash/allvehicule', function () {
    return view('dashboard.allvehicle');
})->name('dashboard-allvehicle');

    // Add a vehicle
Route::get('/dash/addvehicule', function () {
    return view('dashboard.addvehicle');
})->name('dashboard-addvehicle');

    // See all available vehicle
Route::get('/dash/availablevehicule', function () {
    return view('dashboard.availablevehicle');
})->name('dashboard-availablevehicle');

    // See all broken down vehicle
Route::get('/dash/breakvehicule', function () {
    return view('dashboard.breakvehicule');
})->name('dashboard-breakvehicle');

    // Change véhicule State
Route::get('/dash/changestatevehicule', function () {
    return view('dashboard.changestatevehicle');
})->name('dashboard-changestatevehicule');

    // Remove vehicle
Route::get('/dash/delvehicle', function () {
    return view('dashboard.delvehicle');
})->name('dashboard-delvehicle');

    // See all agencies
Route::get('/dash/allagencies', function () {
    return view('dashboard.allagencies');
})->name('dashboard-allagencies');

    // Add agency
Route::get('/dash/addagencies', function () {
    return view('dashboard.addagency');
})->name('dashboard-addagency');

    // Remove agency
Route::get('/dash/delagency', function () {
    return view('dashboard.delagency');
})->name('dashboard-delagency');

    // See asked Payments
Route::get('/dash/askpaymentadmin', function () {
    return view('dashboard.askpaymentadmin');
})->name('dashboard-askpaymentadmin');

    // See done payments
Route::get('/dash/donepaymentadmin', function () {
    return view('dashboard.donepaymentadmin');
})->name('dashboard-donepaymentadmin');

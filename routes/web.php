<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/register', function () {
    return view('publicpages.register');
})->name('register');

Route::get('/login', function () {
    return view('publicpages.login');
})->name('login');

Route::get('/aboutus', function () {
    return view('publicpages.aboutus');
})->name('aboutus');






// Dashboard Interfaces 

Route::get('/dash', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/dash/vehicule', function () {
    return view('dashboard.vehicule');
})->name('dashoboard-allvehicle');
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

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');


Route::get('/admin', function () {
    return view('layouts.template');
});

Auth::routes();

Route::get('/admin_dashboard', 'Admin\DashboardController@index')->middleware('role:admin');
Route::get('/patient_dashboard', 'Patient\DashboardController@index')->middleware('role:patient');
Route::get('/doctor_dashboard', 'Doctor\DashboardController@index')->middleware('role:doctor');

// Patient details
Route::post('/patient_details', 'PatientDetailsController@store');

// Profile Controller
Route::get('/profile/{id}', 'ProfileController@show');
Route::patch('/profile/{id}', 'ProfileController@update');

// Appointment Controller
Route::get('/appointments', 'AppointmentController@index');
Route::post('/appointments', 'AppointmentController@store');

// Symptoms Controller
Route::post('/symptoms', 'SymptomsController@store');


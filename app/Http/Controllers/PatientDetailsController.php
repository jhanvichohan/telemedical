<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PatientDetailsController extends Controller
{
    public function store(Request $request)
    {
    	$request->validate([
            'patientFname' => 'required|max:255',
            'patientSname' => 'required|max:255',
            'patientGender' => 'required',
            'patientDOB' => 'required',
            'patientCountry' => 'required',
            'patientCity' => 'required',
            'patientAddress' => 'required|max:199',
            'patientContact' => 'required',
            'patientStatus' => 'required',
        ]);

        $patient_details = auth()->user()->patient_details()->create($request->all());
        return redirect('/patient_dashboard')->with('success', 'Info successfully added!');
    }
}

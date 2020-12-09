<?php

namespace App\Http\Controllers;

use App\Bookings;
use App\Symptoms;
use Illuminate\Http\Request;

class SymptomsController extends Controller
{
    public function store()
    {
        $data = \request()->validate([
            'bookings_id' => 'required',
            'temperature' => 'required',
            'bloodPressure' => 'required',
            'pulseOximetry' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'bloodGroup' => 'required',
            'medicalState' => 'required',
        ]);

        // create a booking
        Symptoms::create($data);

        return view('patient.appointment.pending');
    }
}

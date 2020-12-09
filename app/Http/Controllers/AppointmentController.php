<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('patient.appointment.book');
    }

    public function store()
    {
        $data = \request()->validate([
            'appointmentDate' => 'required',
            'appointmentTime' => 'required'
        ]);

        $appointment = auth()->user()->bookings()->create($data);

        return view('patient.symptoms.index', compact('appointment'));

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function show($id)
    {
        $details = auth()->user()->patient_details()->get();

        return view('profile.show', compact('details'));
    }

    public function update($id)
    {
        $data = \request()->validate([
            'patientCountry' => 'required',
            'patientCity' => 'required',
            'patientAddress' => 'required',
            'patientContact' => 'required',
            'patientStatus' => 'required',
        ]);

        // update
        auth()->user()->patient_details()->update($data);

        return \redirect('/profile/'.$id);
    }
}

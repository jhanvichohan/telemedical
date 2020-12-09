<?php

namespace App\Http\Controllers\Patient;

use App\PatientDetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
  	}

  	public function index() {

  		$check_details = PatientDetails::where('user_id', auth()->user()->id)->exists();

    	return view('patient.dashboard', compact('check_details'));
  	}
}

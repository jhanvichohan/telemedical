<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientDetails extends Model
{
    protected $guarded = [];
    protected $table = 'patient_details';

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}

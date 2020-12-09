<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $guarded = [];
    protected $table = 'bookings';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

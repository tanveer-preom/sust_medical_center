<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
     protected $table = 'doctors';

    public function myAppointments()
    {
        return $this->hasMany('App\Appointment', 'doctor_id');
    }
}

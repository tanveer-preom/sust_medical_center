<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
	public function myAppointments()
    {
        return $this->hasMany('App\Appointment', 'student_id');
    }

}

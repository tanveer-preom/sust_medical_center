<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $table = 'appointments';

    public function doctor()
    {
        return $this->belongsTo('App\Doctor', 'doctor_id');
    }

    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id');
    }
}

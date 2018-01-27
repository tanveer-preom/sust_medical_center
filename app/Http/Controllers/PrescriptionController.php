<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrescriptionController extends Controller
{

    public function createPrescription(Request $request)
    {
        $studentId = $request->student_id;
        $doctorId = $request->doctor_id;
        $appointmentId = $request->appointment_id;
        $student = App\Student::where('id',$student_id)->first();
        $stdAge = $student->date_of_birth;
        
        return view('doctors/prescription')->with('appointment_id'$appointment_id)->with('student',$student);
    }

    public function submitPrescription(Request $request)
    {

        $pdf = \PDF::loadView('doctors.prescribtion_template', []);
        return $pdf->stream('prescription.pdf');
    }

}

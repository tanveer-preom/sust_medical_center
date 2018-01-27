<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Doctor;
use App\Student;
use App\Appointment;
use App\Prescription;
use Auth;
use Carbon\Carbon;

class PrescriptionController extends Controller
{

    public function createPrescription(Request $request)
    {
        $studentId = $request->student_id;
        $doctorId = $request->doctor_id;
        $appointmentId = $request->appointment_id;
        $student = App\Student::where('id',$studentId)->first();
        $stdDob = $student->date_of_birth;
        $today = Carbon::now()->format('m/d/Y');
        $todayTimeStamp = strtotime($today);
        $stdDobTimeStamp = strtotime($stdDob);
        $stdAge = floor(($todayTimeStamp - $stdDobTimeStamp)/(3600 * 24 *365));
        return view('doctors/prescription')->with('appointment_id',$appointmentId)->with('student',$student)->with('age',$stdAge);
    }

    public function submitPrescription(Request $request)
    {
        //return $request->all();
        $appointmentId = $request->appointment_id;
        App\Appointment::where('id', $appointmentId)->delete();
        $studentId = $request->student_id;
        $userId = Auth::user()->id;
        $doctor = App\Doctor::where('user_id',$userId)->first();
        $student = App\Student::where('id',$studentId)->first();
        $prescription = new \Prescription();
        $prescription->student_id = $studentId;
        $prescription->doctor_id = $doctor->id;
        $prescription->weight = $request->weight;
        $prescription->height = $request->height;
        $prescription->age = $request->age;
        $prescription->description = $request->description;
        $prescription->test = $request->tests;
        $prescription->medications = $request->medicines;
        $prescription->save();
        

        $pdf = \PDF::loadView('doctors.prescribtion_template', ['request' => $request,'doctor'=>$doctor,'student'=>$student]);
        //dd($pdf);
        //return nl2br($request->tests);
        return $pdf->stream('prescription.pdf');
    }

}

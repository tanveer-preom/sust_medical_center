<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Doctor;
use App\Student;
use App\Appointment;
use App\Prescription;
use Auth;
use DateTime;
use DateTimeZone;
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
        if($appointmentId != -1)
        App\Appointment::where('id', $appointmentId)->delete();
        $studentId = $request->student_id;
        $userId = Auth::user()->id;
        $doctor = App\Doctor::where('user_id',$userId)->first();
        $student = App\Student::where('id',$studentId)->first();
        $medications = $request->medicines;
        $medications = str_replace("#","\n", $medications);
        $prescription = new App\Prescription();
        $prescription->student_id = $studentId;
        $prescription->doctor_id = $doctor->id;
        $prescription->weight = $request->weight;
        $prescription->height = $request->height;
        $prescription->age = $request->age;
        $prescription->description = nl2br(e($request->description));
        $prescription->test = nl2br(e($request->tests));
        $prescription->medications = nl2br(e($medications));
        if($prescription->save())
        {
            $time = microtime(true);
            $doctorId = $doctor->id;
            $datetime = new DateTime();
            $datetime->setTimestamp($time);
            $datetime->setTimezone(new DateTimeZone('Asia/Dhaka'));
            $today = $datetime->format('m/d/Y');
            $appointments =  App\Appointment::where('doctor_id',$doctorId)->where('date', $today)->get();
            

            return view('doctors/appointment', [
                'appointments' => $appointments
            ])->with('title',"Today's Appointment")->with('type',0)->with('appointments',$appointments)->with('doctor',$doctor)->with('prescription_id',$prescription->id)->with('contains_prescription',1);
        }
        

        //$pdf = \PDF::loadView('doctors.prescribtion_template', ['request' => $request,'doctor'=>$doctor,'student'=>$student]);
        //dd($pdf);
        //return nl2br($request->tests);
        //return $pdf->stream('prescription.pdf');
    }

    public function viewPrescription($id)
    {
        
        
        $request = App\Prescription::where('id',$id)->first();
        $doctor = App\Doctor::where('id',$request->doctor_id)->first();
        $student = App\Student::where('id',$request->student_id)->first();

        $pdf = \PDF::loadView('doctors.prescribtion_template', ['request' => $request,'doctor'=>$doctor,'student'=>$student]);
        //dd($pdf);
        //return nl2br($request->tests);
        return $pdf->stream('prescription.pdf');
    }




    public function manage(Request $request)
    {
        $student = App\Student::where('registration_no',$request->reg_no)->first();
        if($student == null)
        {
            return view('doctors/manage_prescription');    
        }
        $stdDob = $student->date_of_birth;
        $today = Carbon::now()->format('m/d/Y');
        $todayTimeStamp = strtotime($today);
        $stdDobTimeStamp = strtotime($stdDob);
        $stdAge = floor(($todayTimeStamp - $stdDobTimeStamp)/(3600 * 24 *365));
        return view('doctors/prescription')->with('appointment_id',-1)->with('student',$student)->with('age',$stdAge);
        
    }

    public function manageView(Request $request)
    {
        return view('doctors/manage_prescription');
    }



    public function manageStdPrescription()
    {
        $userId = Auth::user()->id;
        $student = App\Student::where('user_id',$userId)->first();
        $prescriptions = App\Prescription::where('student_id',$student->id)->get();
        return view('students/prescriptions')->with('prescriptions',$prescriptions);

    }




}

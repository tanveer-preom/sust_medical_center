<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Doctor;
use App\Student;
use App\Appointment;
use Auth;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $role = Auth::user()->role;
        if($role == 'student')
        {
            $studentName = App\Student::where('user_id',$userId)->first()->name;
            $doctors = App\Doctor::all();
            //return $doctors;
            return view('students/dashboard')->with('doctors',$doctors)->with('success',false)->with('name',$studentName);
        }
        else if($role == 'doctor')
        {
            $doctor = App\Doctor::where('user_id',$userId)->first();
            $doctorName = $doctor->name;
            $doctorId = $doctor->id;
            $doctorProfilePicture = $doctor->profile_picture;
            $time = microtime(true);
            $datetime = new DateTime();
            $datetime->setTimestamp($time);
            $datetime->setTimezone(new DateTimeZone('Asia/Dhaka'));
            $today = $datetime->format('m/d/Y');
            $appointments =  App\Appointment::where('doctor_id',$doctorId)->where('date', $today)->get();
            
            return view('doctors/dashboard')->with('appointments',$appointments)->with('doctor',$doctor);
            //return view('doctors/dashboard');
        }
        
    }
}

<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Doctor;
use App\Student;
use App\Appointment;
use Carbon\Carbon;
use Auth;

	class AppointmentController extends Controller
	{
	    //
		public function appointment($id)
		{
			$doctor = App\Doctor::where('id',$id)->first();
			$success = false;
			$userId = Auth::user()->id;
			$studentId = App\Student::where('user_id',$userId)->first()->id;
			$studentName = App\Student::where('user_id',$userId)->first()->name;
			return view('students/appointment')->with('doctor',$doctor)->with("success",$success)->with('name',$studentName);
		}

		public function myappointments()
		{
			$userId = Auth::user()->id;
			$studentId = App\Student::where('user_id',$userId)->first()->id;
			$studentName = App\Student::where('user_id',$userId)->first()->name;
			$appointments = App\Appointment::where("student_id",$studentId)->get(); 
			// return $appointments;
			return view('myappointments', [
				'appointments' => $appointments
			])->with('name',$studentName);
		}

		public function createAppointment(Request $request)
		{
			$doctorId = $request->doctor_id;
			$date = $request->date;
			$timeSlot = $request->time_slot;
			$userId = Auth::user()->id;
			$studentId = App\Student::where('user_id',$userId)->first()->id;
			$appointment = new App\Appointment;
			$appointment->student_id = $studentId;
			$appointment->doctor_id = $doctorId;
			$appointment->date = $date;
			$appointment->time_slot = $timeSlot;
			$appointment->save();
			$doctor = App\Doctor::where('id',$doctorId)->first();

			
        	$studentName = App\Student::where('user_id',$userId)->first()->name;
			$doctors = App\Doctor::all();	
        	return view('students/dashboard')->with('doctors',$doctors)->with('success',true)->with('name',$studentName);
			
		}

		public function destroy($id)
		{
			try {
				App\Appointment::destroy($id);
				return redirect()->back()->with('success','Deleted');
			} catch(\Exception $ex) {
				return redirect()->back()->with('error','Failded');
			}
		}

		public function logout()
		{
			Auth::logout();
			return view('index');
		}


		public function appointmentDocToday()
		{
			$userId = Auth::user()->id;
			$doctor = App\Doctor::where('user_id',$userId)->first();
			$doctorId = $doctor->id;
			$today = Carbon::now()->format('m/d/Y');
            $appointments =  App\Appointment::where('doctor_id',$doctorId)->where('date', $today)->get();
            

            return view('doctors/appointment', [
				'appointments' => $appointments
			])->with('title',"Today's Appointment")->with('type',0)->with('appointments',$appointments)->with('doctor',$doctor);
		}

		public function appointmentDocUpcoming()
		{
			$userId = Auth::user()->id;
			$doctor = App\Doctor::where('user_id',$userId)->first();
			$doctorId = $doctor->id;
			$today = Carbon::now()->format('m/d/Y');
			$todayMillis = strtotime($today);
            $appointments =  App\Appointment::where('doctor_id',$doctorId)->get();
            $upcommingAppointments = [];
            foreach ($appointments as $appointment) {
            	$appointmentMillis = strtotime($appointment->date);
            	if($appointmentMillis>$todayMillis)
            	{
            		$upcommingAppointments[] = $appointment;
            	}
            }

            return view('doctors/appointment', [
				'appointments' => $upcommingAppointments
			])->with('title',"Upcoming Appointment")->with('type',1)->with('appointments',$upcommingAppointments)->with('doctor',$doctor);
		}


	}

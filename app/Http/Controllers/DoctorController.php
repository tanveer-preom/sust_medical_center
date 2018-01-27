<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;
class DoctorController extends Controller
{
//    public function index()
//    {
//        return view('students.allDoctors', [
//            'students' => Doctor::all()
//        ]);
//    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $rules =[
            'name'              => 'required',
            'email'             => 'required|unique:users,email',
            'designation'       => '',
        ];
        $data = $request->all();
        //return $data;
        $validation = Validator::make($data,$rules);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $img_url = '';
        if($request->hasFile('profile_picture')) {
            $file = Input::file('profile_picture');
            $destination = public_path().'/uploads/profile_picture/';
            $filename = time().'profile_picture.'.$file->getClientOriginalExtension();
            $file->move($destination, $filename);
            $img_url = '/uploads/profile_picture/'.$filename;
        } else {
            return redirect()->back()->withInput()->withErrors('Image Required');
        }
        $data['password'] = $data['password'] == '' ?  'aaaaaa' : $data['password'];
        DB::beginTransaction();
        try {
            $user = new User;
            $user->email = $data['email'];
            $user->role = 'doctor';
            $user->password = bcrypt($data['password']);
            $user->save();

            $doctor = new Doctor();
            $doctor->user_id = $user->id;
            $doctor->name = $data['name'];
            $doctor->designation = $data['designation'];
            $doctor->profile_picture = $img_url;
            $doctor->save();

            DB::commit();
            return redirect()->route('home')->with('success','Created successfully');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error',"Something went wrong.Please Try again.");
        }

    }

    public function delete($id)
    {
        try {
            $userId = Doctor::find($id)->user_id;
            User::destroy($userId);
            return redirect()->route('home')->with('success','Deleted successfully');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error',"Something went wrong.Please Try again.");
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;
use Validator;
class StudentController extends Controller
{
    public function index()
    {
        return view('students.allStudents', [
            'students' => Student::all()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $rules =[
            'name'              => 'required',
            'email'                 => 'required|unique:users,email',
            'dept'              => '',
            'date_of_birth' => 'required|date',
            'registration_no' => 'required|numeric'
        ];
        $data = $request->all();
        //return $data;
        $validation = Validator::make($data,$rules);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $data['password'] = $data['password'] == '' ?  'aaaaaa' : $data['password'];

        $user = new User;
            $user->email = $data['email'];
            $user->role = 'student';
            $user->password = bcrypt($data['password']);

            if($user->save()){
                $student = new Student();
                $student->user_id = $user->id;
                $student->name = $data['name'];
                $student->dept = $data['dept'];
                $student->date_of_birth = $data['date_of_birth'];
                $student->registration_no = $data['registration_no'];

                if($student->save()) {
                    return redirect()->route('student.index')
                        ->with('success','Created successfully');
                } else {
                    User::destroy($user->id);
                }

            }else{
                return redirect()->route('student.index')
                    ->with('error',"Something went wrong.Please Try again.");
            }

    }

    public function delete($id)
    {
        try {
            $userId = Student::find($id)->user_id;
            User::destroy($userId);
            return redirect()->route('student.index')->with('success','Deleted successfully');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error',"Something went wrong.Please Try again.");
        }
    }
}

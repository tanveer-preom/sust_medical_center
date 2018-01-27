<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function changePassword(){
        return view('auth.changePassword')
            ->with('title',"Change Password")->with('user', Auth::user());
        // return 'Change Password';
    }
    public function doChangePassword(Request $request){
        $rules =[
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
        $data = $request->all();
        $validation = Validator::make($data,$rules);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }else{
            $user = Auth::user();
            $user->password = Hash::make($data['password']);
            if($user->save()){
                Auth::logout();
                return redirect()->route('login')
                    ->with('success','Your password changed successfully.');
            }else{
                return redirect()->route('dashboard')
                    ->with('error',"Something went wrong.Please Try again.");
            }
        }
        // return 'Do Change Password';
    }
}

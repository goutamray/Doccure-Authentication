<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PatientProfileController extends Controller
{
        // patient profile page 
        public function showPatientSettingPage(){
            return view("frontend.patient.settings");
        }

        // patient profile page 
        public function showPatientPasswordPage(){
            return view("frontend.patient.password");
        }


        /**
         * patient password change 
         * 
         */
        public function patientPasswordChange(Request $request){
            
          // old password check 
          if ( !password_verify($request -> old_pass, Auth::guard('patient') -> user() -> password)) {
                 return back() -> with("danger", "Old Password Not Match");
            }

          // password confirmation
         if ($request -> pass != $request -> pass_confirmation) {
            return back() -> with("warning", "Password and Confirm Password Not Match");
         }


        $data = Patient::findOrFail(Auth::guard('patient') -> user() -> id);
           
        $data -> update([
            "password" => Hash::make($request -> pass)
        ]);

        Auth::guard('patient') -> logout();

        return redirect() -> route('login.page') -> with("success", "Please Login Again");
      
    }
    
}
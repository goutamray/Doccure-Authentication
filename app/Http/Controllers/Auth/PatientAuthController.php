<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientAuthController extends Controller
{
    /**
     * 
     * patient register 
     */

     public function register(Request $request){

        // validation 
        $validate =  $request -> validate([
           "name"     => "required",
           "email"    => "required",
           "phone"    => "required",
           "password" => "required",
        ]);


       $patient = Patient::create([
            "name"     => $request -> name,
            "email"    => $request -> email,
            "phone"    => $request -> phone,
            "password" => password_hash($request -> password, PASSWORD_BCRYPT),
        ]);

        return redirect()->route("patientRegister.page")
        ->with("success", "Hi {$patient->name}, Your Account Created");
    
        
     }


         /**
     * 
     * patient register 
     */

     public function login(Request $request){

      // validation 
      $validate =  $request -> validate([
         "email"    => "required",
         "password" => "required",
      ]);


     // auth access
     if (Auth::guard('patient') -> attempt(["email" => $request-> email, "password" => $request -> password ]) || Auth::guard('patient') -> attempt(["phone" => $request-> email, "password" => $request -> password ])) {
      return redirect()->route("patientDashboard.page")
      ->with("success", "Your Account Created");
     } else{
      return redirect()->route("login.page")
      ->with("danger", "Username or Password Invalid");
     }
  
   
      
   }
}

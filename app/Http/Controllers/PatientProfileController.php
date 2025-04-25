<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
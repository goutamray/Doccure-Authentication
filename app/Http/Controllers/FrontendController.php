<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // show Home page 
    public function showHomePage(){
        return view("frontend.home");
    }


    // show Login page 
    public function showLoginPage(){
        return view("frontend.login");
    }

    // show Patient Register page 
    public function showPatientRegisterPage(){
        return view("frontend.patient.register");
    }

    // show patient Dasboard page 
    public function showPatientDashboardPage(){
        return view("frontend.patient.dashboard");
    }


    // show Dactor Register page 
    public function showDactorRegisterPage(){
        return view("frontend.dactor.register");
    }

    // show Dactor Dasboard page 
    public function showDactorDashboardPage(){
        return view("frontend.dactor.dashboard");
    }



}
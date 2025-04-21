<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // show home page 
    public function showHomePage(){
        return view("frontend.home");
    }
}
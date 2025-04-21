<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, "showHomePage"]) -> name("home.page");
Route::get('/login', [FrontendController::class, "showLoginPage"]) -> name("login.page");

// patient register route
Route::get('/patient-register', [FrontendController::class, "showPatientRegisterPage"]) -> name("patientRegister.page");
Route::get('/patient-dashboard', [FrontendController::class, "showPatientDashboardPage"]) -> name("patientDashboard.page");


// dactor register route
Route::get('/dactor-register', [FrontendController::class, "showDactorRegisterPage"]) -> name("dactorRegister.page");
Route::get('/dactor-dashboard', [FrontendController::class, "showDactorDashboardPage"]) -> name("dactorDashboard.page");
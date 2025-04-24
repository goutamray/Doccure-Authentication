<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\PatientAuthController;

Route::get('/', [FrontendController::class, "showHomePage"]) -> name("home.page");
Route::get('/login', [FrontendController::class, "showLoginPage"]) -> name("login.page");

// patient register route
Route::get('/patient-register', [FrontendController::class, "showPatientRegisterPage"]) -> name("patientRegister.page");
Route::get('/patient-dashboard', [FrontendController::class, "showPatientDashboardPage"]) -> name("patientDashboard.page");

Route::post('/patient-register', [PatientAuthController::class, "register"]) -> name('patient.register');

Route::post('/patient-login', [PatientAuthController::class, "login"]) -> name('patient.login');

Route::get('/patient-logout', [PatientAuthController::class, "logout"]) -> name('patient.logout');





// dactor register route
Route::get('/dactor-register', [FrontendController::class, "showDactorRegisterPage"]) -> name("dactorRegister.page");
Route::get('/dactor-dashboard', [FrontendController::class, "showDactorDashboardPage"]) -> name("dactorDashboard.page");

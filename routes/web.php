<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\FrontendController;
use App\Http\Middleware\Admin\AdminAuthMiddleware;
use App\Http\Controllers\Auth\PatientAuthController;
use App\Http\Controllers\PatientProfileController;
use App\Http\Middleware\Admin\AdminAuthRedirectMiddleware;

Route::get('/', [FrontendController::class, "showHomePage"]) -> name("home.page");


// patient login route // when login can not acess register page
Route::get('/login', [FrontendController::class, "showLoginPage"])
 ->middleware(AdminAuthRedirectMiddleware::class)
 -> name("login.page");

// patient register route // when login can not acess register page
Route::get('/patient-register', [FrontendController::class, "showPatientRegisterPage"])
->middleware(AdminAuthRedirectMiddleware::class) 
-> name("patientRegister.page");

// middleware use this route
Route::get('/patient-dashboard', [FrontendController::class, "showPatientDashboardPage"])
->middleware(AdminAuthMiddleware::class) 
-> name("patientDashboard.page");

//patient setting  middleware use this route
Route::get('/patient-settings', [PatientProfileController::class, "showPatientSettingPage"])
->middleware(AdminAuthMiddleware::class) 
-> name("patientSetting.page");

//patient password change  middleware use this route
Route::get('/patient-password', [PatientProfileController::class, "showPatientPasswordPage"])
->middleware(AdminAuthMiddleware::class) 
-> name("patientPassword.page");


Route::post('/patient-register', [PatientAuthController::class, "register"]) -> name('patient.register');

Route::post('/patient-login', [PatientAuthController::class, "login"]) -> name('patient.login');

Route::get('/patient-logout', [PatientAuthController::class, "logout"]) -> name('patient.logout');





// dactor register route
Route::get('/dactor-register', [FrontendController::class, "showDactorRegisterPage"]) -> name("dactorRegister.page");
Route::get('/dactor-dashboard', [FrontendController::class, "showDactorDashboardPage"]) -> name("dactorDashboard.page");
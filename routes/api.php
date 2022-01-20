<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\VisitationController;
use App\Http\Controllers\ServicesofferedController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// creating new user
Route::post('/user_Registration', [AuthController::class, 'register']);

  //logging in
 Route::post('/sign_in', [AuthController::class, 'signIn']);

//forgot password
Route::post('/forgot_password', [AuthController::class, 'forgotPassword']);


//password reset
Route::post('/reset_password', [AuthController::class, 'resetPassword']);


  //returning users count
  Route::get('/user_count', [AuthController::class, 'count']);

  //returning patient count
  Route::get('/patient_count', [PatientsController::class, 'count']);

  // return all users
Route::get('/users', [AuthController::class, 'show']);


/*

protected routes below require user authenticatio

*/


Route::group(['middleware' => ['auth:sanctum']], function () {

    //logging out
 Route::post('/sign_out', [AuthController::class, 'logout']);



//creating a new patient
Route::post('/patients', [PatientsController::class, 'store']);

//updating patient
Route::put('/patients/{id}', [PatientsController::class, 'update']);

//deleting patient
Route::delete('/patients/{id}', [PatientsController::class, 'destroy']);


//creating a new service
Route::post('/Services', [ServicesController::class, 'store']);

//updating a service
Route::put('/Services/{id}', [ServicesController::class, 'update']);


//deleting a service
Route::delete('/Services/{id}', [ServicesController::class, 'destroy']);


//creating a new medication
Route::post('/Medication', [MedicationController::class, 'store']);


//updating meds using medication id
Route::put('/Medication/{id}', [MedicationController::class, 'update']);


//deleting meds
Route::delete('/Medication/{id}', [MedicationController::class, 'destroy']);


//creating a new visitation
Route::post('/Visitation', [VisitationController::class, 'store']);



//updating a visit
Route::put('/Visitation/{id}', [VisitationController::class, 'update']);


//creating a new prescription
Route::post('/Visitation_prescription', [PrescriptionController::class, 'store']);
//creating a new service consumed
Route::post('/ServicesOffered', [ServicesofferedController::class, 'store']);


});

//getting all patient
Route::get('/patients',[PatientsController::class, 'index']);

// show a single patient using patient id
Route::get('/patients/{id}',[PatientsController::class, 'show']);

//this searches for a patient
Route::get('/patients/search/{name}',[PatientsController::class, 'search']);

//getting all Services
Route::get('/Services',[ServicesController::class, 'index']);


//getting visitation's services
Route::get('/Visitation_Services/{id}', [VisitationController::class, 'Services']); // passing in the visitation id


//Showing all prescriptions
Route::get('/Prescription', [PrescriptionController::class, 'show']);


//getting patients visit by passing in patient id
Route::get('/Visitation/{id}', [PatientsController::class, 'visits']);

//getting visitation's prescription by passing in visitation id
Route::get('/Visitation_Prescription/{id}', [VisitationController::class, 'prescription']); // passing in the visitation id


//getting patients visitation of today using patient id
Route::get('/Visitation_today/{patient_id}', [VisitationController::class, 'today']);


//getting all visitations
Route::get('/Visitation', [VisitationController::class, 'index']);

// show a search Medication
Route::get('/Medication/search/{name}',[MedicationController::class, 'search']);

//showing all meds
Route::get('/Medication', [MedicationController::class, 'index']);


// show a single service
Route::get('/Services/{id}',[ServicesController::class, 'show']);
// show a search Service
Route::get('/Services/search/{name}',[ServicesController::class, 'search']);


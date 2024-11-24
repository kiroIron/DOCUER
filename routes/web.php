<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/patient/doctors',[App\Http\Controllers\HomeController::class,'patient_doctors'])->name('patient_doctors');
    Route::get('logout',[App\Http\Controllers\HomeController::class,'logout'])->name('patientlogout');
    Route::get('/patient/profile',[App\Http\Controllers\HomeController::class,'profile'])->name('patientprofile');
    Route::put('/patient/profile/{id}',[App\Http\Controllers\HomeController::class,'updateprofile'])->name('updateprofile');
    Route::get('/patient/book/{id}',[App\Http\Controllers\HomeController::class,'book'])->name('patientbook');
    Route::post('/patient/book/{id}',[App\Http\Controllers\HomeController::class,'makeappintment'])->name('makeappintment');
});




Route::get('/doctorlogin', [App\Http\Controllers\DoctorController::class, 'doctorlogin'])->name('doctorlogin');
Route::get('/doctorregister', [App\Http\Controllers\DoctorController::class, 'doctorregister'])->name('doctorregister');
Route::post('/doctorlogin', [App\Http\Controllers\DoctorController::class, 'logindoctor'])->name('logindoctor');
Route::post('/doctorregister', [App\Http\Controllers\DoctorController::class, 'registerdoctor'])->name('registerdoctor');
Route::get('/doctorproflie/{id}',[DoctorController::class,'showdoctorprofle'])->name('showdoctorprofle');


Route::middleware('doctor')->group(function(){
    // Route::get('/doctor', [App\Http\Controllers\DoctorController::class, 'index'])->name('doctooors');
        Route::get('/doctor/profile', [App\Http\Controllers\DoctorController::class, 'profile'])->name('doctorprofile');
        Route::resource('/doctor',App\Http\Controllers\DoctorController::class);
        Route::get('logout',[DoctorController::class,'logout'])->name('doctorlogout');
});


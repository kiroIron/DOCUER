<?php

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
});




Route::get('/doctorlogin', [App\Http\Controllers\DoctorController::class, 'doctorlogin'])->name('doctorlogin');
Route::get('/doctorregister', [App\Http\Controllers\DoctorController::class, 'doctorregister'])->name('doctorregister');
Route::post('/doctorlogin', [App\Http\Controllers\DoctorController::class, 'logindoctor'])->name('logindoctor');
Route::post('/doctorregister', [App\Http\Controllers\DoctorController::class, 'registerdoctor'])->name('registerdoctor');


Route::middleware('doctor')->group(function(){
    // Route::get('/doctor', [App\Http\Controllers\DoctorController::class, 'index'])->name('doctooors');
        Route::get('/doctor/profile', [App\Http\Controllers\DoctorController::class, 'profile'])->name('doctorprofile');
        Route::resource('/doctor',App\Http\Controllers\DoctorController::class);
});


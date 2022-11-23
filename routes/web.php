<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PatientController;

//General
Route::get('/', [GeneralController::class, 'welcome'])->name('welcome');

//Doctor
Route::get('doc/home', [DoctorController::class, 'home'])->name('doc.home');
Route::post('doc/update', [DoctorController::class, 'update'])->name('doc.update');
Route::post('doc/status', [DoctorController::class, 'status'])->name('doc.status');

//Staff
Route::get('staff/home', [StaffController::class, 'home'])->name('staff.home');
Route::post('set/meeting', [StaffController::class, 'set_meeting'])->name('set.meeting');
Route::post('/reject/schedule', [StaffController::class, 'reject_schedule'])->name('reject.schedule');
Route::get('/rehab', [StaffController::class, 'rehab'])->name('rehab');

//Patient
Route::get('/home', [patientController::class, 'home'])->name('home');
Route::get('/profile', [patientController::class, 'profile'])->name('profile');
Route::get('/doc/{id}/profile', [patientController::class, 'view_doctor'])->name('profile.doc');
Route::post('/new/schedule', [patientController::class, 'new_schedule'])->name('new.schedule');
Route::get('/schedule', [patientController::class, 'schedule'])->name('schedule');

//Authentications
require __DIR__ . '/auth.php';
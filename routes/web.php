<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctimeController;

//General
Route::get('/', [GeneralController::class, 'welcome'])->name('welcome');
Route::get('delete/{id}/request', [GeneralController::class, 'delete_request'])->name('delete.request');

//Doctor
Route::get('doc/home', [DoctorController::class, 'home'])->name('doc.home');
Route::get('doc/meeting', [DoctorController::class, 'meeting'])->name('doc.meeting');
Route::post('doc/update', [DoctorController::class, 'update'])->name('doc.update');
Route::post('doc/status', [DoctorController::class, 'status'])->name('doc.status');
Route::post('done/meeting', [DoctorController::class, 'done_meeting'])->name('done.meeting');

//Staff
Route::get('staff/home', [StaffController::class, 'home'])->name('staff.home');
Route::post('set/meeting', [StaffController::class, 'set_meeting'])->name('set.meeting');
Route::post('/reject/schedule', [StaffController::class, 'reject_schedule'])->name('reject.schedule');
Route::get('/rehab', [StaffController::class, 'rehab'])->name('rehab');
Route::post('/create/rehab', [StaffController::class, 'create_rehab'])->name('create.rehab');
Route::post('/update/rehab', [StaffController::class, 'update_rehab'])->name('update.rehab');
Route::get('/all/request', [StaffController::class, 'all_request'])->name('all.request');
Route::get('/delete/rehab', [StaffController::class, 'delete_rehab'])->name('delete.rehab');

//Patient
Route::get('/home', [patientController::class, 'home'])->name('home');
Route::get('/profile', [patientController::class, 'profile'])->name('profile');
Route::get('/doc/{id}/profile', [patientController::class, 'view_doctor'])->name('profile.doc');
Route::post('/new/schedule', [patientController::class, 'new_schedule'])->name('new.schedule');
Route::get('/schedule', [patientController::class, 'schedule'])->name('schedule');
Route::get('/rehab/{id}/details', [patientController::class, 'rehab_details'])->name('rehab.details');
Route::post('/request/booking', [patientController::class, 'request_booking'])->name('request.booking');
Route::get('/list/request', [patientController::class, 'list_request'])->name('list.request');

//Doctime
Route::post('/create/doctime', [DoctimeController::class, 'create'])->name('create.doctime');
Route::post('/update/doctime', [DoctimeController::class, 'update'])->name('update.doctime');
Route::get('/delete/{id}/doctime', [DoctimeController::class, 'delete'])->name('delete.doctime');

//Authentications
require __DIR__ . '/auth.php';
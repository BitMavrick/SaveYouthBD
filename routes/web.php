<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PatientController;

Route::get('/', [GeneralController::class, 'welcome'])->name('welcome');

Route::get('doc/home', [DoctorController::class, 'home'])->name('doc.home');
Route::post('doc/update', [DoctorController::class, 'update'])->name('doc.update');
Route::post('doc/status', [DoctorController::class, 'status'])->name('doc.status');

Route::get('staff/home', [StaffController::class, 'home'])->name('staff.home');

Route::get('/home', [patientController::class, 'home'])->name('home');
Route::get('/doc/{id}/profile', [patientController::class, 'view_doctor'])->name('profile.doc');


require __DIR__ . '/auth.php';
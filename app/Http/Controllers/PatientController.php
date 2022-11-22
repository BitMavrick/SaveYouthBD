<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\profile;

class PatientController extends Controller
{
    public function home()
    {
        if (isset(Auth::user()->role) and Auth::user()->role == 'doctor') {
            return redirect()->route('doc.home');
        } elseif (isset(Auth::user()->role) and Auth::user()->role == 'staff') {
            return redirect()->route('staff.home');
        } elseif (isset(Auth::user()->role) and Auth::user()->role == 'patient') {

            $doctors = User::where('role', 'doctor')->get();
            $all_profile = profile::all();

            view()->share('doctors', $doctors);
            view()->share('all_profile', $all_profile);

            //dd($doctors);

            return view('index-patient');
        } else {
            return redirect()->route('welcome');
        }
    }
}
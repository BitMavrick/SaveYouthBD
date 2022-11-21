<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\profile;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function home()
    {
        if (isset(Auth::user()->role) and Auth::user()->role == 'doctor') {
            $profile = profile::where('id', Auth::user()->id)->first();
            View()->share('profile_data', $profile);
            return view('index-doctor');
        } elseif (isset(Auth::user()->role) and Auth::user()->role == 'staff') {
            return redirect()->route('staff.home');
        } elseif (isset(Auth::user()->role) and Auth::user()->role == 'patient') {
            return redirect()->route('home');
        } else {
            return redirect()->route('welcome');
        }
    }
}
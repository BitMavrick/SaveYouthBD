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

            return view('index-patient');
        } else {
            return redirect()->route('welcome');
        }
    }

    public function view_doctor($id)
    {
        $profile = profile::where('id', $id)->first();
        $user = User::where('id', $id)->first();

        View()->share('profile_data', $profile);
        View()->share('user', $user);

        return view('view-doctor');
    }
}
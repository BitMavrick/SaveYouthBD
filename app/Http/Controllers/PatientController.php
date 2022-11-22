<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Profile;
use App\Models\Schedule;

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
            $profiles = Profile::all();

            view()->share('doctors', $doctors);
            view()->share('profiles', $profiles);

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

    public function profile()
    {
        $profile = profile::where('id', Auth::user()->id)->first();
        $user = User::where('id', Auth::user()->id)->first();

        View()->share('profile_data', $profile);
        View()->share('user', $user);

        return view('profile');
    }

    public function new_schedule(Request $request)
    {
        dd(request()->all());

        $schedule = new Schedule;
        $schedule->patient_id = Auth::user()->id;
        $schedule->doctor_id = $request->doctor_id;
        $schedule->date = $request->date;
        $schedule->time = $request->time;
        $schedule->status = 'pending';
        $schedule->save();

        return redirect()->route('home')->with('success', 'Schedule has been created');
    }
}
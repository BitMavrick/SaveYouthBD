<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Profile;
use App\Models\Schedule;
use App\Models\Rehab;

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
            $rehabs = Rehab::all();

            view()->share('doctors', $doctors);
            view()->share('profiles', $profiles);
            view()->share('rehabs', $rehabs);

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

    public function schedule()
    {
        $schedules = Schedule::orderBy('created_at', 'desc')->get();
        $doctors = User::where('role', 'doctor')->get();

        view()->share('schedules', $schedules);
        view()->share('doctors', $doctors);
        return view('schedule');
    }

    public function new_schedule(Request $request)
    {
        $schedule = new Schedule;
        $schedule->subject = $request->subject;
        $schedule->patient_id = Auth::user()->id;
        $schedule->doctor_id = $request->doctor_id;
        $schedule->patient_name = $request->patient_name;
        $schedule->patient_age = $request->patient_age;
        $schedule->patient_gender = $request->patient_gender;
        $schedule->schedule_time = $request->schedule_time;
        $schedule->save();

        return redirect()->route('schedule');
    }
}
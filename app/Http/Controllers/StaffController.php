<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\profile;
use App\Models\Schedule;
use App\Models\Rehab;
use App\Models\Request as pickup;

class StaffController extends Controller
{
    public function home()
    {
        if (isset(Auth::user()->role) and Auth::user()->role == 'doctor') {
            return redirect()->route('doc.home');
        } elseif (isset(Auth::user()->role) and Auth::user()->role == 'staff') {
            $profile = profile::where('id', Auth::user()->id)->first();
            $schedules = Schedule::orderBy('created_at', 'desc')->get();
            $doctors = User::where('role', 'doctor')->get();

            view()->share('schedules', $schedules);
            view()->share('doctors', $doctors);

            View()->share('profile_data', $profile);
            return view('index-staff');
        } elseif (isset(Auth::user()->role) and Auth::user()->role == 'patient') {
            return redirect()->route('home');
        } else {
            return redirect()->route('welcome');
        }
    }

    public function set_meeting(Request $request)
    {
        $schedule = Schedule::where('id', $request->meeting_id)->first();

        $schedule->approve = '1';
        $schedule->meet_link = $request->meet_link;

        $schedule->save();

        return redirect()->route('staff.home');
    }

    public function reject_schedule(Request $request)
    {
        $schedule = Schedule::where('id', $request->meeting_id)->first();
        $schedule->approve = '2';
        $schedule->meet_link = null;

        $schedule->save();

        return redirect()->route('staff.home');
    }

    public function create_rehab(Request $request)
    {
        $rehab = new Rehab;

        $rehab->name = $request->name;
        $rehab->address = $request->address;
        $rehab->phone = $request->phone;
        $rehab->email = $request->email;
        $rehab->min_age = $request->min_age;
        $rehab->description = $request->description;

        $rehab->save();

        return redirect()->route('rehab');
    }

    public function update_rehab(Request $request)
    {
        $rehab = Rehab::where('id', $request->id)->first();

        $rehab->name = $request->name;
        $rehab->address = $request->address;
        $rehab->phone = $request->phone;
        $rehab->email = $request->email;
        $rehab->min_age = $request->min_age;
        $rehab->description = $request->description;

        $rehab->save();

        return redirect()->route('rehab');
    }


    public function rehab()
    {
        $rehabs = Rehab::orderBy('created_at', 'desc')->get();
        view()->share('rehabs', $rehabs);

        return view('rehab');
    }

    public function all_request()
    {
        $requests = pickup::orderBy('created_at', 'desc')->get();
        view()->share('requests', $requests);

        return view('list-request-all');
    }
}
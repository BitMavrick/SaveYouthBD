<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\profile;
use App\Models\Schedule;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function home()
    {
        if (isset(Auth::user()->role) and Auth::user()->role == 'doctor') {
            $profile = profile::where('id', Auth::user()->id)->first();
            View()->share('profile_data', $profile);

            $schedules = Schedule::orderBy('created_at', 'desc')->get();
            view()->share('schedules', $schedules);

            return view('index-doctor');
        } elseif (isset(Auth::user()->role) and Auth::user()->role == 'staff') {
            return redirect()->route('staff.home');
        } elseif (isset(Auth::user()->role) and Auth::user()->role == 'patient') {
            return redirect()->route('home');
        } else {
            return redirect()->route('welcome');
        }
    }

    public function update(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->save();

        $profile = profile::where('id', Auth::user()->id)->first();

        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->gender = $request->gender;
        $profile->address = $request->address;
        $profile->date_of_birth = $request->date_of_birth;
        $profile->educational_qualification = $request->educational_qualification;
        $profile->experties = $request->experties;
        $profile->working_organization = $request->working_organization;
        $profile->website = $request->website;
        $profile->description = $request->description;

        $profile->save();

        return redirect()->route('doc.home');
    }


    public function status(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->active = $request->active;
        $user->save();
        return redirect()->route('doc.home');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function home()
    {
        if (isset(Auth::user()->role) and Auth::user()->role == 'doctor') {
            return view('index-doctor');
        } elseif (isset(Auth::user()->role) and Auth::user()->role == 'staff') {
            return redirect()->route('staff.home');
        } elseif (isset(Auth::user()->role) and Auth::user()->role == 'staff') {
            return redirect()->route('home');
        }
    }
}
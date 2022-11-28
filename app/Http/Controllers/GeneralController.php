<?php

namespace App\Http\Controllers;

use App\Models\Request as pickup;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    public function welcome()
    {
        return view('index');
    }

    public function delete_request(Request $request)
    {
        $request = pickup::where('id', $request->id)->first();
        $request->delete();

        if (Auth::user()->role == 'patient') {
            return redirect()->route('list.request');
        } elseif (Auth::user()->role == 'staff') {
            return redirect()->route('all.request');
        }
    }
}
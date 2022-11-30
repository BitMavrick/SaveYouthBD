<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctime;
use Illuminate\Support\Facades\Auth;

class DoctimeController extends Controller
{
    public function create(Request $request)
    {
        $doctime = new Doctime();
        $doctime->doctor_id = Auth::user()->id;
        $doctime->day = $request->day;
        $doctime->time_from = $request->time_from;
        $doctime->time_to = $request->time_to;
        $doctime->save();

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $doctime = Doctime::where('id', $request->id)->first();
        $doctime->day = $request->day;
        $doctime->time_from = $request->time_from;
        $doctime->time_to = $request->time_to;
        $doctime->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $doctime = Doctime::where('id', $id)->first();
        $doctime->delete();

        return redirect()->back();
    }
}
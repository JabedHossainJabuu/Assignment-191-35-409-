<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function redirect()
    {
        if(Auth::id())
        {
            return view('User.LandingPage');
        }
    }

    public function upload(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->phone = $request->number;
        $student->room = $request->room;
        $student->save();
        return redirect()->back();
    }

    public function index()
    {
        $student = student::all();
        return view('user.ShowData', compact('student'));
    }


}

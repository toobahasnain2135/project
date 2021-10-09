<?php

namespace App\Http\Controllers;

use App\Models\batool;
use Illuminate\Http\Request;

class BatoolController extends Controller
{
    public function BatoolView()
    {
           return view('student.batool');
    }

    public function BatoolCreate(request $request)
    {
        batool::create($request->all());
        return redirect()->back()->with('msg','my jany created :)');
    }
}

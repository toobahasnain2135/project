<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function EmployeeView()
    {
        return view('employee.create');
    }
    public function EmloyeeCreate(Request $request)
    {
        employee::create($request->all());
        return redirect()->back()->with('msg','created');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function CreateDoctorForm()
    {
        return view('doctor.add');
    }
    public function CreateDoctor(Request $request)
    {
        doctor::Create($request->all());
        return redirect()->back()->with('msg','doctor created succesfully');
    }

    public function viewdoctor()
    {
        $data = doctor::all();
        return view('doctor.show', compact('data'));
    }
    public function DeleteDoctor(doctor $id)

    {

       $id->delete();
        return redirect()->back();
        # code...
    }

    public function updateform(doctor $doctor)
    {
        return view('doctor.updateform', compact('doctor'));
    }
    public function update(Request $request, doctor $id)
    {
       $id->update($request->all());
       return redirect(route('show'))->with('msg','updated succesfully');
    }
}

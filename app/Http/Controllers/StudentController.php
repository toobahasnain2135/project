<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Storage;


class StudentController extends Controller
{
    public function StudentForm()
    {
        return view('student.studentform');
    }
    public function FormSubmit(Request $request )
    {
        if($request->hasfile('image'))
        {
            $filename=time().$request->image->getClientOriginalName();
            $request->image->StoreAs('StudentImage',$filename,'public');
            $student=student::create($request->all());
            $student->image=$filename;
            $student->Save();
            $student->notify(new Notification($student));
            return redirect(route('StudentShow'))->with('msg','Image Save');
        }


        return redirect(route('StudentShow'))->with('msg','hey m save hogya hn');
    }
    public function StudentShow()
    {

        $show =Student::all();
        return view('Student.show',compact('show'));
    }
    public function StudentDelete(Student $student)
    {
        Storage::delete('/public/StudentImage/'. $student->image);
        $student->delete();
        return redirect(route('StudentShow'))->with('msg','deleted');

    }
    public function StudentEdit(Student $student)

    {
        return view('student.Editform',compact('student'));
    }
    public function StudentUpdated(Student $student,Request $request)
   {

    if($request->hasFile('image'))
     {
         $filename=time().$request->image->getClientOriginalName();
         Storage::delete('/public/StudentImage/'.$student->image);
         $request->image->storeAs('StudentImage',$filename,'public');
         $student->update($request->all());
         $student->image=$filename;
         $student->save();
         return redirect(route('StudentShow'))->with('msg','Image UPDATED');
    }

        $student->update($request->all());
        return redirect(route('StudentShow'))->with('msg','UPDATED');
    }
}

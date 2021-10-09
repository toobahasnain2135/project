<?php

namespace App\Http\Controllers;
use Illuminate\Notifications\Notification;

use App\Models\teacher;
use App\Notifications\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TeacherController extends Controller
{
    public function CreateTeacherForm()
    {
        return view('Teacher.CreateForm');
    }
    public function CreateTeacher(Request $request)
    {
        $request->validate([
            'name' =>'required|max:30|' ,
            'age'=>'integer',
            'image'=>'required',
            'address'=> 'required'

        ]);
        if($request->hasFile('image'))
        {
            $filename = time().$request->image->getClientOriginalName();
            $request->image->storeAs('TeacherImages',$filename,'public');
            $teacher = teacher::create($request->all());
            $teacher->image = $filename;
            $teacher->save();
            $teacher->notify(new Welcome($teacher));
            return redirect(route('TeacherShow'))->with('msg','data added');


        }

       return redirect(route('TeacherShow'))->with('msg','add image');
    }
    public function TeacherShow()
    {
        $data = teacher::all();

        return view('Teacher.Show', compact('data'));
    }

    public function TeacherDelete(teacher $teacher)
    {
        Storage::delete('/public/TeacherImages'.$teacher->image);
        $teacher->delete();
        return redirect(route('TeacherShow'))->with('msg','dafa hojao');
    }
    public function EditTeacher(teacher $teacher)
    {
        return view('Teacher.EditForm',compact('teacher'));
    }
    public function EditedTeacher(teacher $teacher,Request $request)
    {
        if($request->hasFile('image')){
            $filename = time().$request->image->getClientOriginalName();
            Storage::delete('/public/TeacherImages'.$teacher->image);
            $request->image->storeAs('TeacherImages',$filename,'public');
            $teacher->update($request->all());
            $teacher->image = $filename;
            $teacher->save();
            return redirect(route('TeacherShow'))->with('msg','edited successfully');

        }
        $teacher->update($request->all());
        return redirect(route('TeacherShow'))->with('msg','edited successfully');
    }

}

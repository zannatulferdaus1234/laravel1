<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Student;
use Session;

class StudentController extends Controller
{
    public function index()
    {
        $student=Student::latest()->get();
        return view('student.manage',compact('student'));
    }
    public function create()
    {
        return view('student.stupid');
    }

    public function store(Request $request)
    {

        $student=new Student();
        $student->student_name  = $request->student_name;
        $student->address       = $request->address;
        $student->phone_no      = $request->phone_no;
        $student->save();
        return back()->with('message','Data Saved Successfully!');
    }
    public function edit($id){
        $student=Student::find($id);
       return view('student.edit',compact('student'));
    }
    public function update(Request $request)
     {
        $student=Student::find($request->id);
        $student->student_name  = $request->student_name;
        $student->address       = $request->address;
        $student->phone_no      = $request->phone_no;
        $student->save();
        return redirect()->back()->with('message','Data Updated Successfully!');
         
     }
    public function delete($id){    
        $student=Student::find($id)->delete();
        return redirect()->back()->with('message','Data deleted Successfully!');
     }
     
    


}

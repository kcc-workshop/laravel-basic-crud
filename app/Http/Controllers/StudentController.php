<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $faculties = Faculty::get();

        return view('student-form')->with('faculties', $faculties);
    }

    public function validator($student)
    {
        return Validator::make($student, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255'
        ]);
    }

    public function create(Request $request)
    {
        $this->validator($request->all())->validate();

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'faculty_id' => $request->faculty,
            'status' => 1
        ]);

        return redirect('/student-list');
    }

    public function list()
    {
        $studentList = Student::where('status', 1)->get();

        return view('student-list')->with('students', $studentList);
    }

    public function view($id)
    {
        $student = Student::find($id);

        return view('student-view')->with('student', $student);
    }

    public function edit($id)
    {
        $student = Student::find($id);

        return view('student-update')->with('student', $student);
    }

    public function update(Request $request)
    {
        $this->validator($request->all())->validate();

        Student::where('id', $request->id)
                   ->update([
                       'name' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'status' => 1
                   ]);

        return redirect('/student-list');
    }

    public function remove($id)
    {
        $student = Student::find($id);
     
        $student->status = 0;
        
        $student->save();
        
        return redirect('/student-list');
    }
}

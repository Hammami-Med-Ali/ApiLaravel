<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class ApiController extends Controller
{
    public function create(Request $REQUEST)
    {
        $students = new Student();
        $students->fname = $REQUEST->input('fname');
        $students->lname = $REQUEST->input('lname');
        $students->email = $REQUEST->input('email');
        $students->password = $REQUEST->input('password');

        $students->save();
        return response()->json($students);
        //return redirect('/dashbord');

    }
    public function show()
    {
         $students = Student::all();
        
        return response()->json($students);    
    }
    public function showbyid($id) 
    {
        $students = Student::find($id);
        return response()->json($students); 

    }
    public function update(REQUEST $REQUEST,$id) 
    {
        $students = Student::find($id);
        //dd($REQUEST);
        $students->fname = $REQUEST->input('fname');
        $students->lname = $REQUEST->input('lname');
        $students->email = $REQUEST->input('email');
        $students->password = $REQUEST->input('password'); 
        $students->save();
        //return response()->json($students);
        //return view('/edit',compact('students','id'));
        return redirect('/api/student');
    }
    public function delete(REQUEST $REQUEST,$id) 
    {
        $students = Student::find($id);
        $students->delete();
        return response()->json($students); 

    }
    public function index(){
        $students = Student::all();
        return view('/index',compact('students'));
    }
    public function edit($id) 
    {
        $students = Student::find($id);
        
        return view('/edit',compact('students'));    }
 
}
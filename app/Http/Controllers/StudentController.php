<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function create(){
      return view('student.create');
    }
    public function edit(){
        return view('student.edit');
    }
    public function delete(){
        // return view('student.delete');
    }
    public function get(){

        $student = array
        (
            "name" =>"Emrul",
            "id" =>123,
            "dob" =>"12.12.12"

        );
        $student = (object) $student; 
       // return var_dump($student)->with('student',$student);
        return view('student.get')->with('student',$student);
    }
}

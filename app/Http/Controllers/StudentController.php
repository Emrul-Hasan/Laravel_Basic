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
        return view('student.get');
    }
}

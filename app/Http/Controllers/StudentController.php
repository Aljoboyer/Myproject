<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    public function all(){

    		 $students = student::all();
    return view('students', ['students' => $students]);

    }

   
}

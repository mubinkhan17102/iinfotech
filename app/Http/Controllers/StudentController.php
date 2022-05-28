<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function studentlist(){
        $students = Student::all();
        return view('studentlist', ['students'=>$students]);
    }
}

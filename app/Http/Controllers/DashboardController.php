<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index(){
        $students = Student::all();
        $courses = Course::all();
        return view('dashboard.dashboard',compact('students','courses'));
     }
}
